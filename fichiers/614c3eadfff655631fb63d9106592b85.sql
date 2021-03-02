insert into bars (id_bar,bar,pays) values (1,'Bar du Coin','France');
insert into bars (id_bar,bar,pays) values (2,'Corners Pub','USA');
insert into bars (id_bar,bar,pays) values (3,'Cafe der Ecke','Allemagne');
insert into bars (id_bar,bar,pays) values (4,'Cafe des Amis','France');

insert into bieres(id_biere,biere,couleur,origine) values (1,'Kronenbourg','Blonde','France');
insert into bieres(id_biere,biere,couleur,origine) values (2,'Guinness','Brune','Irlande');
insert into bieres(id_biere,biere,couleur,origine) values (3,'Heineken','Blonde','Hollande');
insert into bieres(id_biere,biere,couleur,origine) values (4,'Newcastle','Rousse','UK');
insert into bieres(id_biere,biere,couleur,origine) values (5,'Spaten','Blonde','Allemagne');
insert into bieres(id_biere,biere,couleur,origine) values (6,'Bush','Blonde','USA');
insert into bieres(id_biere,biere,couleur,origine) values (7,'Kanterbrau','Blonde','France');
insert into bieres(id_biere,biere,couleur,origine) values (8,'Kronenbourg','Brune','France');

insert into services(id_bar,id_biere,stock) values(1,1,1000);
insert into services(id_bar,id_biere,stock) values(1,2,250);
insert into services(id_bar,id_biere,stock) values(1,3,50);
insert into services(id_bar,id_biere,stock) values(1,4,10);
insert into services(id_bar,id_biere,stock) values(1,5,10);
insert into services(id_bar,id_biere,stock) values(1,6,10);
insert into services(id_bar,id_biere,stock) values(1,7,40);
insert into services(id_bar,id_biere,stock) values(1,8,60);
insert into services(id_bar,id_biere,stock) values(2,1,100);
insert into services(id_bar,id_biere,stock) values(2,6,1500);
insert into services(id_bar,id_biere,stock) values(3,5,5000);