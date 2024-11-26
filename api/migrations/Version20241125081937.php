<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241125081937 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE person_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE postal_address_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE person (id INT NOT NULL, name TEXT DEFAULT NULL, family_name TEXT DEFAULT NULL, given_name TEXT DEFAULT NULL, additional_name TEXT DEFAULT NULL, address TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE postal_address (id INT NOT NULL, address_country TEXT DEFAULT NULL, address_locality TEXT DEFAULT NULL, address_region TEXT DEFAULT NULL, post_office_box_number TEXT DEFAULT NULL, postal_code TEXT DEFAULT NULL, street_address TEXT DEFAULT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE person_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE postal_address_id_seq CASCADE');
        $this->addSql('DROP TABLE person');
        $this->addSql('DROP TABLE postal_address');
    }
}
