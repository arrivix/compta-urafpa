<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181110103152 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE contrib (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(250) NOT NULL, date_begin DATE NOT NULL, date_end DATE DEFAULT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contrib_rules (id INT AUTO_INCREMENT NOT NULL, idcontrib_id INT NOT NULL, create_user_id INT NOT NULL, modify_user_id INT DEFAULT NULL, field_verif VARCHAR(250) NOT NULL, field_verif_type INT NOT NULL, field_verif_value JSON NOT NULL COMMENT \'(DC2Type:json_array)\', hierarchy INT NOT NULL, contrib_calculation JSON NOT NULL COMMENT \'(DC2Type:json_array)\', create_time DATETIME NOT NULL, modify_time DATETIME DEFAULT NULL, INDEX IDX_A43342BB908858A7 (idcontrib_id), INDEX IDX_A43342BB85564492 (create_user_id), INDEX IDX_A43342BBF52F9A2C (modify_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE funding_resource (id INT AUTO_INCREMENT NOT NULL, type_funding_resource INT NOT NULL, source_funing_resource INT NOT NULL, funding_begin_date INT NOT NULL, funding_end_date INT NOT NULL, inactive_date DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contrib_rules ADD CONSTRAINT FK_A43342BB908858A7 FOREIGN KEY (idcontrib_id) REFERENCES contrib (id)');
        $this->addSql('ALTER TABLE contrib_rules ADD CONSTRAINT FK_A43342BB85564492 FOREIGN KEY (create_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE contrib_rules ADD CONSTRAINT FK_A43342BBF52F9A2C FOREIGN KEY (modify_user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contrib_rules DROP FOREIGN KEY FK_A43342BB908858A7');
        $this->addSql('DROP TABLE contrib');
        $this->addSql('DROP TABLE contrib_rules');
        $this->addSql('DROP TABLE funding_resource');
    }
}
