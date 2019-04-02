<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181111093223 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ligne_budget_laboratory_project (ligne_budget_id INT NOT NULL, laboratory_project_id INT NOT NULL, INDEX IDX_AED8E790F94EA930 (ligne_budget_id), INDEX IDX_AED8E7905DEB71D1 (laboratory_project_id), PRIMARY KEY(ligne_budget_id, laboratory_project_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ligne_budget_laboratory_project ADD CONSTRAINT FK_AED8E790F94EA930 FOREIGN KEY (ligne_budget_id) REFERENCES ligne_budget (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ligne_budget_laboratory_project ADD CONSTRAINT FK_AED8E7905DEB71D1 FOREIGN KEY (laboratory_project_id) REFERENCES laboratory_project (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE ligne_budget_laboratory_project');
    }
}
