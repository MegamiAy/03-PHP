    CREATE TABLE tb_sobre (
        id int PRIMARY KEY AUTO_INCREMENT,
        Sobre varchar(255)
    );

    CREATE TABLE tb_equipe (
        id int PRIMARY KEY AUTO_INCREMENT,
        Nome varchar(100),
        Descricao varchar(255)
    );

    INSERT INTO tb_sobre (Sobre)
    VALUES ("Lorem ipsum1");
    
    INSERT INTO tb_sobre (Sobre)
    VALUES ("Lorem ipsum2");

    INSERT INTO tb_equipe (Nome, Descricao)
    VALUES ("Junior Bergavari", "Lorem ipsum2");
    
    INSERT INTO tb_equipe (Nome, Descricao)
    VALUES ("Victor Foxy", "Lorem ipsum2");
