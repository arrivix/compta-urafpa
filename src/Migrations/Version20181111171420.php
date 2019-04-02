<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181111171420 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE annee_ligne_budget (ligne_budget_id INT NOT NULL, annee_id INT NOT NULL, INDEX IDX_3D403072F94EA930 (ligne_budget_id), INDEX IDX_3D403072543EC5F0 (annee_id), PRIMARY KEY(ligne_budget_id, annee_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE annee_ligne_budget ADD CONSTRAINT FK_3D403072F94EA930 FOREIGN KEY (ligne_budget_id) REFERENCES ligne_budget (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE annee_ligne_budget ADD CONSTRAINT FK_3D403072543EC5F0 FOREIGN KEY (annee_id) REFERENCES annee (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE annee_lign_budget');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE annee_lign_budget (ligne_budget_id INT NOT NULL, annee_id INT NOT NULL, INDEX IDX_439DBC19F94EA930 (ligne_budget_id), INDEX IDX_439DBC19543EC5F0 (annee_id), PRIMARY KEY(ligne_budget_id, annee_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE annee_lign_budget ADD CONSTRAINT FK_439DBC19543EC5F0 FOREIGN KEY (annee_id) REFERENCES annee (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE annee_lign_budget ADD CONSTRAINT FK_439DBC19F94EA930 FOREIGN KEY (ligne_budget_id) REFERENCES ligne_budget (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE annee_ligne_budget');
    }
}
