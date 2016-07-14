insert into exhibition (name) value ('Summer Show 2016');

update defaults set ShowID = (select id from exhibition where name='Summer Show 2016') where id=1;

insert into exhibitionsection (exhibitionid,sectionnumber,description,sectionid)
SELECT e2.id,sectionnumber,description,sectionid
FROM exhibitionsection
join exhibition e1
on exhibitionid=e1.id,
exhibition e2
where e1.name='Summer Show 2015'
and e2.name='Summer Show 2016';

insert into exhibitionclass (exhibitionid,exhibitionsectionid,classnumber,classid)
SELECT e2.id ExhibitionID,es2.ID,ClassNumber,ClassID
FROM exhibitionclass ec
join exhibition e1
on ec.ExhibitionID=e1.id
join exhibitionsection es1
on ec.ExhibitionSectionID=es1.ID,
exhibition e2
join exhibitionsection es2
on es2.ExhibitionID=e2.ID
where e1.name='Summer Show 2015'
and e2.name='Summer Show 2016'
and es1.SectionID=es2.SectionID
and (
 es1.Description=es2.Description
 or (
  es1.Description is null
  and es2.Description is null
 ));

insert into exhibitionclassprize (exhibitionclassid,prizeid,prize,points)
SELECT ec.id,p.id,prize,points
FROM exhibitionclass  ec
join exhibition e1
on ec.ExhibitionID=e1.id,
prize p
where e1.name='Summer Show 2016';

insert into exhibitionclassprize (exhibitionclassid,prizeid,prize,points)
SELECT ec.id,p.id,prize,points
FROM exhibitionclass  ec
join exhibition e1
on ec.ExhibitionID=e1.id,
prize p
where e1.name='Summer Show 2016';

insert into class (name) values ("Bark or Berries"),("Wild Flower(s)"),("Society Outings");

update exhibitionclass
set classid = (select id from class where name="Water")
where exhibitionid =
(
select id 
from exhibition
where name='Summer Show 2016'
)
and classnumber='71';

update exhibitionclass
set classid = (select id from class where name="Bark or Berries")
where exhibitionid =
(
select id 
from exhibition
where name='Summer Show 2016'
)
and classnumber='72';

update exhibitionclass
set classid = (select id from class where name="Wild Flower(s)")
where exhibitionid =
(
select id 
from exhibition
where name='Summer Show 2016'
)
and classnumber='73';

update exhibitionclass
set classid = (select id from class where name="Society Outings")
where exhibitionid =
(
select id 
from exhibition
where name='Summer Show 2016'
)
and classnumber='74';

insert into class (name) values ("Rio Olympic Extravaganza"),("Tickled Pink"),("Floral Arangement in a Wine Glass");

update exhibitionclass
set classid = (select id from class where name="Rio Olympic Extravaganza")
where exhibitionid =
(
select id 
from exhibition
where name='Summer Show 2016'
)
and classnumber='57';

update exhibitionclass
set classid = (select id from class where name="Tickled Pink")
where exhibitionid =
(
select id 
from exhibition
where name='Summer Show 2016'
)
and classnumber='58';

update exhibitionclass
set classid = (select id from class where name="Floral Arangement in a Wine Glass")
where exhibitionid =
(
select id 
from exhibition
where name='Summer Show 2016'
)
and classnumber='59';

insert into trophy (exhibitionid,name,member)
SELECT e2.id,t.name,Member
FROM trophy t
join exhibition e1
on t.ExhibitionID=e1.id,
exhibition e2
where e1.name='Summer Show 2015'
and e2.name='Summer Show 2016';

insert into exhibitiontrophyclass(trophyid,exhibitionclassid)
SELECT 
 t2.ID trophyid,
 ec2.id exhibitionclassid


#,etc.*,ec.*,ec2.*
from exhibitiontrophyclass etc
join trophy t
on etc.TrophyID=t.id
join exhibition e1
on t.ExhibitionID=e1.id
join exhibitionclass ec
on etc.ExhibitionClassID = ec.id

,
exhibition e2
join trophy t2
on t2.ExhibitionID=e2.id
join exhibitionclass ec2
on ec2.ExhibitionID=e2.id

where e1.name='Summer Show 2015'
and e2.name='Summer Show 2016'
and t.Name=t2.Name
and ec.ClassNumber=ec2.ClassNumber
;
