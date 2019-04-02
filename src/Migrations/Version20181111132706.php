<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181111132706 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE annee (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(4) NOT NULL, description LONGTEXT DEFAULT NULL, active TINYINT(1) NOT NULL, visible TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE annee_ligne_budget (annee_id INT NOT NULL, ligne_budget_id INT NOT NULL, INDEX IDX_3D403072543EC5F0 (annee_id), INDEX IDX_3D403072F94EA930 (ligne_budget_id), PRIMARY KEY(annee_id, ligne_budget_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE annee_ligne_budget ADD CONSTRAINT FK_3D403072543EC5F0 FOREIGN KEY (annee_id) REFERENCES annee (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE annee_ligne_budget ADD CONSTRAINT FK_3D403072F94EA930 FOREIGN KEY (ligne_budget_id) REFERENCES ligne_budget (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE annee_ligne_budget DROP FOREIGN KEY FK_3D403072543EC5F0');
        $this->addSql('DROP TABLE annee');
        $this->addSql('DROP TABLE annee_ligne_budget');
    }
}
