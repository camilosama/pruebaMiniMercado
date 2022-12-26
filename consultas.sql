-- OBTENER EL ELEMENTO CON MAYOR STOCK 
SELECT * FROM `productos` order by stock desc LIMIT 1; 
-- OBTENERL EL ELEMENTO CON MAS VENTAS
SELECT po.nombre, ve.id, sum(ve.stock_actual) as ventas FROM `productos` po
inner join ventas ve on ve.id= po.id
GROUP BY ve.id 
LIMIT 1;