<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190116144032 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE costs (id INT AUTO_INCREMENT NOT NULL, year_id INT NOT NULL, budget_line_id INT NOT NULL, create_user_id INT NOT NULL, last_update_user_id INT DEFAULT NULL, cost_date DATE NOT NULL, provider VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, cost_price NUMERIC(10, 2) NOT NULL, create_date DATETIME NOT NULL, last_update_date DATETIME DEFAULT NULL, historic LONGTEXT DEFAULT NULL, version INT DEFAULT NULL, INDEX IDX_AF1D57A840C1FEA7 (year_id), INDEX IDX_AF1D57A88FF83FA3 (budget_line_id), INDEX IDX_AF1D57A885564492 (create_user_id), INDEX IDX_AF1D57A88ED8C3E8 (last_update_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE costs_reference (id INT AUTO_INCREMENT NOT NULL, type INT NOT NULL, reference VARCHAR(100) NOT NULL, reference_person DATE DEFAULT NULL, reference_person_urafpa INT DEFAULT NULL, type1reference INT DEFAULT NULL, type2reference INT DEFAULT NULL, type3reference INT DEFAULT NULL, type4reference INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cost_state (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE costs ADD CONSTRAINT FK_AF1D57A840C1FEA7 FOREIGN KEY (year_id) REFERENCES annee (id)');
        $this->addSql('ALTER TABLE costs ADD CONSTRAINT FK_AF1D57A88FF83FA3 FOREIGN KEY (budget_line_id) REFERENCES ligne_budget (id)');
        $this->addSql('ALTER TABLE costs ADD CONSTRAINT FK_AF1D57A885564492 FOREIGN KEY (create_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE costs ADD CONSTRAINT FK_AF1D57A88ED8C3E8 FOREIGN KEY (last_update_user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE costs');
        $this->addSql('DROP TABLE costs_reference');
        $this->addSql('DROP TABLE cost_state');
    }
}
