<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181111132334 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ligne_budget_annee DROP FOREIGN KEY FK_D5D10F6543EC5F0');
        $this->addSql('DROP TABLE annee');
        $this->addSql('DROP TABLE ligne_budget_annee');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE annee (id INT AUTO_INCREMENT NOT NULL, nom INT NOT NULL, begin_date DATE NOT NULL, end_date DATE NOT NULL, active TINYINT(1) NOT NULL, hierarchy INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_budget_annee (ligne_budget_id INT NOT NULL, annee_id INT NOT NULL, INDEX IDX_D5D10F6F94EA930 (ligne_budget_id), INDEX IDX_D5D10F6543EC5F0 (annee_id), PRIMARY KEY(ligne_budget_id, annee_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ligne_budget_annee ADD CONSTRAINT FK_D5D10F6543EC5F0 FOREIGN KEY (annee_id) REFERENCES annee (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ligne_budget_annee ADD CONSTRAINT FK_D5D10F6F94EA930 FOREIGN KEY (ligne_budget_id) REFERENCES ligne_budget (id) ON DELETE CASCADE');
    }
}
