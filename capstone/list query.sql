-- List Query
SELECT tt.type AS 'Type', tt.team_id AS 'ID', tt.name AS 'Name',
CASE 
WHEN m.role LIKE '%(SM)%' THEN m.role
       ELSE NULL
END AS 'SM_RTE_STE',
   CASE 
WHEN m.role LIKE '%(PO)%' THEN m.role
       WHEN m.role LIKE '%(PM)%' THEN m.role
       ELSE NULL
END AS 'PM_PO',
   tt.parent
FROM trains_and_teams tt
LEFT OUTER JOIN membership m
ON tt.team_id = m.team_id;