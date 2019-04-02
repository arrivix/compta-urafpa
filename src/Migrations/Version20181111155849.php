<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181111155849 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ligne_budget_time_montant (id INT AUTO_INCREMENT NOT NULL, annee_id INT NOT NULL, montant NUMERIC(10, 2) NOT NULL, begin_date DATE DEFAULT NULL, annee_begin_date TINYINT(1) NOT NULL, end_date DATE DEFAULT NULL, annee_end_date TINYINT(1) DEFAULT NULL, INDEX IDX_DDD8462E543EC5F0 (annee_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ligne_budget_time_montant ADD CONSTRAINT FK_DDD8462E543EC5F0 FOREIGN KEY (annee_id) REFERENCES annee (id)');
        $this->addSql('ALTER TABLE annee CHANGE nom nom VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE funding_resource ADD nom VARCHAR(100) NOT NULL, ADD short_nom VARCHAR(10) NOT NULL, ADD active TINYINT(1) NOT NULL, DROP funding_begin_date, DROP funding_end_date, DROP inactive_date');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CA86F0066C6E55B5 ON funding_resource (nom)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CA86F0061B2E152A ON funding_resource (short_nom)');
        $this->addSql('ALTER TABLE ligne_budget DROP montant');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE ligne_budget_time_montant');
        $this->addSql('ALTER TABLE annee CHANGE nom nom VARCHAR(4) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('DROP INDEX UNIQ_CA86F0066C6E55B5 ON funding_resource');
        $this->addSql('DROP INDEX UNIQ_CA86F0061B2E152A ON funding_resource');
        $this->addSql('ALTER TABLE funding_resource ADD funding_begin_date INT NOT NULL, ADD funding_end_date INT NOT NULL, ADD inactive_date DATE DEFAULT NULL, DROP nom, DROP short_nom, DROP active');
        $this->addSql('ALTER TABLE ligne_budget ADD montant NUMERIC(10, 2) NOT NULL');
    }
}
