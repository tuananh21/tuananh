create database classroom
use classroom

--1
create table teachers(
	teacher_id int primary key IDENTITY(1,1),
	t_firstname nvarchar(200) not null,
	t_lastname nvarchar(200) not null,
	t_subject nvarchar(200) not null
)

create table classes(
	class_id int primary key IDENTITY(1,1),
	c_name varchar(200) not null,
	teacher_id int not null,
	constraint FK_teacher FOREIGN KEY (teacher_id) REFERENCES teachers(teacher_id)
)

create table students(
	student_id int primary key IDENTITY(1,1),
	s_firstname nvarchar(200) not null,
	s_lastname nvarchar(200) not null,
	class_id int not null,
	constraint FK_classes FOREIGN KEY (class_id) REFERENCES classes(class_id),
	s_birthdate date not null
)

--2
insert into teachers (t_firstname,t_lastname,t_subject) values
(N'Bùi',N'Mạnh Đình',N'Toán'),
(N'Nguyễn',N'Gia Hưng',N'Vật Lý'),
(N'Lương',N'Mạnh Chiến',N'Hóa')

insert into classes(c_name,teacher_id) values 
('12A1','1'),('12A2','2'),('12A3','3'),('12B1','3'),('12B2','2'),('12B3','1')

insert into students (s_firstname, s_lastname, s_birthdate,class_id) values
(N'Hà',N'Chí Khang','2007/05/24','1'),
(N'Ngô',N'Việt Quốc','2007/08/12','2'),
(N'Lý',N'Minh Hùng','2007/09/11','3'),
(N'Nguyễn',N'Mạnh Trường','2007/01/21','4'),
(N'Phan',N'Cao Minh','2007/10/27','5'),
(N'Phạm',N'Hồng Đào','2007/10/09','1'),
(N'Nguyễn',N'Thục Oanh','2007/05/11','2'),
(N'Phạm',N'Quế Chi','2007/12/05','3'),
(N'Hoàng',N'Thảo Nhi','2007/03/08','4'),
(N'Bùi',N'Hải Vy','2007/07/01','5'),
(N'Phạm',N'Chí Kiên','2007/04/12','6'),
(N'Ngô',N'Quỳnh Như','2007/08/19','6')


--3
select * from students


--4
select * from students where year(s_birthdate) >=2000

--5
select s.*,
CONCAT(t.t_firstname ,' ' ,t.t_lastname) as teacher_in_charge
from students s
join classes c on s.class_id = c.class_id
join teachers t on t.teacher_id = c.teacher_id
order by s.s_lastname

--6
update students set s_firstname = N'John', s_lastname = N'Doe'
where student_id = 3

--7
delete from students where student_id = 7

--8
create procedure GetStudentsByClassAndSubject 
	@class_id int,
	@subject nvarchar(200)
as select 
	s.*,
	c.c_name as class_name,
	t.t_subject,
	t.t_firstname + '' + t.t_lastname as teacher_name
from students s
join classes c on c.class_id = s.class_id
join teachers t on t.teacher_id = c.teacher_id
where s.class_id = @class_ID and t.t_subject = @subject

exec GetStudentsByClassAndSubject @class_id = 1,@subject =N'Toán'

--9
 create view [StudentsWithClassAndTeacher] as
 select 
	s.*,
	c.c_name as class_name,
	t.t_firstname+ ' ' + t.t_lastname as teacher_in_charge
from students s
 join classes c on s.class_id = c.class_id
 join teachers t  on t.teacher_id = c.teacher_id 

 select * from [StudentsWithClassAndTeacher]






