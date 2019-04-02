<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190317213942 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE document ADD create_user_id INT DEFAULT NULL, ADD modification_user_id INT DEFAULT NULL, ADD modification_date DATETIME NOT NULL, ADD create_date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A7685564492 FOREIGN KEY (create_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A76337A48F0 FOREIGN KEY (modification_user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_D8698A7685564492 ON document (create_user_id)');
        $this->addSql('CREATE INDEX IDX_D8698A76337A48F0 ON document (modification_user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A7685564492');
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A76337A48F0');
        $this->addSql('DROP INDEX IDX_D8698A7685564492 ON document');
        $this->addSql('DROP INDEX IDX_D8698A76337A48F0 ON document');
        $this->addSql('ALTER TABLE document DROP create_user_id, DROP modification_user_id, DROP modification_date, DROP create_date');
    }
}
