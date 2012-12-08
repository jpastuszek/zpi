insert into uzytkownik (login,haslo) values ('a',MD5('a'));

insert into element(nazwa,kod) values ('checkBox - 1','<input type="checkbox" value="1" name="XXXXX" />');
insert into element(nazwa,kod) values ('radioButton - 5','<input type="radio" value="1" name="XXXXX" /><input type="radio" value="2" name="XXXXX" /><input type="radio" value="3" name="XXXXX" /><input type="radio" value="4" name="XXXXX" /><input type="radio" value="5" name="XXXXX" />');
insert into element (nazwa,kod) values ('textbox','<input type="text" size="100" value="YYYYY" name="XXXXX" />');

insert into ankieta(aktywna,id_uzytkownik) values ('T',1);

insert into ankieta_element (id_ankieta,id_element,wartosc,pytanie) values (1,2,'jakas wartosc','Jak oceniasz ankiete?');

insert into ankieta_element (id_ankieta,id_element,wartosc,pytanie) values (1,2,'jakas wartosc2','Jak oceniasz ankiete 2?');

insert into ankieta_element (id_ankieta,id_element,wartosc,pytanie) values (1,2,'jakas wartosc3','Jak oceniasz ankiete 3?');


select ankieta_element.pytanie, REPLACE(element.kod,'XXXXX',concat(ankieta_element.id_ankieta,'_',ankieta_element.id_ankieta_element)) from ankieta_element, element where ankieta_element.id_element=element.id_element and ankieta_element.id_ankieta=1

select ankieta_element.pytanie, REPLACE(element.kod,'XXXXX',ankieta_element.id_ankieta+'_'+ankieta_element.id_ankieta_element) from ankieta_element, element where ankieta_element.id_element=element.id_element and ankieta_element.id_ankieta=1

select ankieta_element.pytanie,element.kod from ankieta_element, element where ankieta_element.id_element=element.id_element and ankieta_element.id_ankieta=1

INSERT INTO element(nazwa,kod) VALUES ('textbox_autocomplite Wykladowca','<label for="wykladowca_autocomplete">YYYYY</label><input id="wykladowca_autocomplete" name="XXXXX "/>');
INSERT INTO element(nazwa,kod) VALUES ('textbox_autocomplite Przedmioty','<label for="przedmioty_autocomplete">YYYYY</label><input id="przedmioty_autocomplete" name="XXXXX "/>');