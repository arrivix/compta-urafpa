<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181111175455 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ligne_budget_time_montant ADD ligne_budget_id INT NOT NULL');
        $this->addSql('ALTER TABLE ligne_budget_time_montant ADD CONSTRAINT FK_DDD8462EF94EA930 FOREIGN KEY (ligne_budget_id) REFERENCES ligne_budget (id)');
        $this->addSql('CREATE INDEX IDX_DDD8462EF94EA930 ON ligne_budget_time_montant (ligne_budget_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ligne_budget_time_montant DROP FOREIGN KEY FK_DDD8462EF94EA930');
        $this->addSql('DROP INDEX IDX_DDD8462EF94EA930 ON ligne_budget_time_montant');
        $this->addSql('ALTER TABLE ligne_budget_time_montant DROP ligne_budget_id');
    }
}
