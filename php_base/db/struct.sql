DROP TABLE IF EXISTS student_info;

CREATE TABLE student_info(
  id INT(11) NOT NULL AUTO_INCREMENT,
  full_name VARCHAR(128) NOT NULL,
  roll_no CHAR(7) NOT NULL,
  date_of_birth DATE NOT NULL,
  gender ENUM('MALE','FEMALE','TRANSGENDER') NOT NULL,
  summary TEXT NOT NULL,
  timestamp_punch datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Single Entry
-- date input in yyyy-mm-dd

INSERT INTO
            student_info(full_name,roll_no,date_of_birth,gender,summary)
        VALUES
            ('Kumar','98BE10','1999-10-10','MALE','Text');
            

              
-- Multiple

INSERT INTO
            student_info(full_name,roll_no,date_of_birth,gender)
        VALUES
            ('Arun','98BE11','1998-01-31','MALE'),
            ('Bala','98BE13','1998-12-24','FEMALE'),
            ('Veera','18MCA007','1997-09-16','MALE');


-- Drop Table
-- DROP TABLE student_info_basic;
