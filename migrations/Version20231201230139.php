<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231201230139 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article CHANGE title title VARCHAR(180) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_23A0E662B36786B ON article (title)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D64991657DAE ON user (fullname)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649444F97DD ON user (phone)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649D4E6F81 ON user (address)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_23A0E662B36786B ON article');
        $this->addSql('ALTER TABLE article CHANGE title title VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX UNIQ_8D93D64991657DAE ON `user`');
        $this->addSql('DROP INDEX UNIQ_8D93D649444F97DD ON `user`');
        $this->addSql('DROP INDEX UNIQ_8D93D649D4E6F81 ON `user`');
    }
}
