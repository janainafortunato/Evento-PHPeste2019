create table usuarios(
 id int not null AUTO_INCREMENT,
 nome varchar(50) NOT NULL,
 email varchar(50) NOT NULL,
 senha varchar(255) NOT NULL,
 criando_em varchar(20) NOT NULL,
 PRIMARY KEY (id)

);

INSERT INTO usuarios(nome, email, senha, criando_em) VALUES 


('janaina Fortunato', 'teste@teste.com', '123456', '18-10-2019'

'Paula silva', 'teste01@teste.com', '123456', '18-10-2019'

'Matheus silva', 'teste02@teste.com', '123456', '18-10-2019'

);