SELECT driver, drivers.Team AS Team, SUM(punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE driver LIKE "Ridion"
                        UNION
                        SELECT driver, drivers.Team AS Team, SUM(punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE driver LIKE "Qumielo"
                        UNION
                        SELECT driver, drivers.Team AS Team, SUM(punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE driver LIKE "DonkeyKonkey"
                        UNION
                        SELECT driver, drivers.Team AS Team, SUM(punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE driver LIKE "TimToBeat"
                        UNION
                        SELECT driver, drivers.Team AS Team, SUM(punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE driver LIKE "Demigod"
                        UNION
                        SELECT driver, drivers.Team AS Team, SUM(punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE driver LIKE "Pinguin"
                        UNION
                        SELECT driver, drivers.Team AS Team, SUM(punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE driver LIKE "JordiZ64"
                        UNION
                        SELECT driver, drivers.Team AS Team, SUM(punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE driver LIKE "JurdeV"
                        UNION
                        SELECT driver, drivers.Team AS Team, SUM(punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE driver LIKE "Trivago"
                        UNION
                        SELECT driver, drivers.Team AS Team, SUM(punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE driver LIKE "Dennis"
                        UNION
                        SELECT driver, drivers.Team AS Team, SUM(punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE driver LIKE "MOAB02"
                        UNION
                        SELECT driver, drivers.Team AS Team, SUM(punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE driver LIKE "Bikk3l"
                        UNION
                        SELECT driver, drivers.Team AS Team, SUM(punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE driver LIKE "Battle On"
                        UNION
                        SELECT driver, drivers.Team AS Team, SUM(punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE driver LIKE "Rene9977"
                        UNION
                        SELECT driver, drivers.Team AS Team, SUM(punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE driver LIKE "Arris"
                        UNION
                        SELECT driver, drivers.Team AS Team, SUM(punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE driver LIKE "Heroism"
                        UNION
                        SELECT driver, drivers.Team AS Team, SUM(punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE driver LIKE "Schapen"
                        UNION
                        SELECT driver, drivers.Team AS Team, SUM(punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE driver LIKE "TheDutchTorpedo"
                        UNION
                        SELECT driver, drivers.Team AS Team, SUM(punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE driver LIKE "Kyreria"
                        UNION
                        SELECT driver, drivers.Team AS Team, SUM(punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE driver LIKE "Y_ram(NL)"
                        ORDER BY punten DESC;