<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181111130031 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ligne_budget_annee (ligne_budget_id INT NOT NULL, annee_id INT NOT NULL, INDEX IDX_D5D10F6F94EA930 (ligne_budget_id), INDEX IDX_D5D10F6543EC5F0 (annee_id), PRIMARY KEY(ligne_budget_id, annee_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ligne_budget_annee ADD CONSTRAINT FK_D5D10F6F94EA930 FOREIGN KEY (ligne_budget_id) REFERENCES ligne_budget (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ligne_budget_annee ADD CONSTRAINT FK_D5D10F6543EC5F0 FOREIGN KEY (annee_id) REFERENCES annee (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ligne_budget DROP FOREIGN KEY FK_55286B3D543EC5F0');
        $this->addSql('DROP INDEX IDX_55286B3D543EC5F0 ON ligne_budget');
        $this->addSql('ALTER TABLE ligne_budget DROP annee_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE ligne_budget_annee');
        $this->addSql('ALTER TABLE ligne_budget ADD annee_id INT NOT NULL');
        $this->addSql('ALTER TABLE ligne_budget ADD CONSTRAINT FK_55286B3D543EC5F0 FOREIGN KEY (annee_id) REFERENCES annee (id)');
        $this->addSql('CREATE INDEX IDX_55286B3D543EC5F0 ON ligne_budget (annee_id)');
    }
}
