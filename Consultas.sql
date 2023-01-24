SELECT v.id_producto, SUM(v.cantidad) AS TotalVentas
FROM ventas v
INNER JOIN productos p ON (p.id=v.id_producto)
GROUP BY v.id_producto
ORDER BY SUM(v.cantidad) DESC;


SELECT MAX(stock) as stock_maxima
FROM productos

