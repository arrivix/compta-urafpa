<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181110082228 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ligne_budget CHANGE id_annee id_annee_id INT NOT NULL');
        $this->addSql('ALTER TABLE ligne_budget ADD CONSTRAINT FK_55286B3D4E52965 FOREIGN KEY (id_annee_id) REFERENCES annee (id)');
        $this->addSql('CREATE INDEX IDX_55286B3D4E52965 ON ligne_budget (id_annee_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ligne_budget DROP FOREIGN KEY FK_55286B3D4E52965');
        $this->addSql('DROP INDEX IDX_55286B3D4E52965 ON ligne_budget');
        $this->addSql('ALTER TABLE ligne_budget CHANGE id_annee_id id_annee INT NOT NULL');
    }
}
