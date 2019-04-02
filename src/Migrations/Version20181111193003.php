<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181111193003 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ligne_budget_ligne_budget_type (ligne_budget_id INT NOT NULL, ligne_budget_type_id INT NOT NULL, INDEX IDX_C649F5F2F94EA930 (ligne_budget_id), INDEX IDX_C649F5F23D71F4BD (ligne_budget_type_id), PRIMARY KEY(ligne_budget_id, ligne_budget_type_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_budget_type (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(30) NOT NULL, exception_rules LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', alert_rules LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', warning_rules LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', help_rules LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ligne_budget_ligne_budget_type ADD CONSTRAINT FK_C649F5F2F94EA930 FOREIGN KEY (ligne_budget_id) REFERENCES ligne_budget (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ligne_budget_ligne_budget_type ADD CONSTRAINT FK_C649F5F23D71F4BD FOREIGN KEY (ligne_budget_type_id) REFERENCES ligne_budget_type (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ligne_budget_ligne_budget_type DROP FOREIGN KEY FK_C649F5F23D71F4BD');
        $this->addSql('DROP TABLE ligne_budget_ligne_budget_type');
        $this->addSql('DROP TABLE ligne_budget_type');
    }
}
