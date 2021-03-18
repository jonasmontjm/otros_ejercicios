update employees e
join countries c on c.id = e.country_id
join continents ct on ct.id = c.continent_id
  set e.salary = (e.salary + ROUND(((ct.anual_adjustment / 100) * e.salary)))
where e.salary <=5000
and e.id > 0;