# Write your MySQL query statement below
SELECT firstName, lastName, city, state FROM Person
LEFT JOIN Address on Address.personId = Person.personId