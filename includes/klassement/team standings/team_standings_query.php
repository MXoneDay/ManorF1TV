SELECT drivers.Team AS Team, SUM(snelste_ronde_punten+race_punten-straf_punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE Team LIKE "Mercedes AMG Petronas"
                        UNION
                        SELECT DISTINCT drivers.Team AS Team, SUM(snelste_ronde_punten+race_punten-straf_punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE Team LIKE "Scuderia Ferrari"
                        UNION
                        SELECT drivers.Team AS Team, SUM(snelste_ronde_punten+race_punten-straf_punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE Team LIKE "Red Bull Racing"
                        UNION
                        SELECT drivers.Team AS Team, SUM(snelste_ronde_punten+race_punten-straf_punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE Team LIKE "Mclaren"
                        UNION
                        SELECT drivers.Team AS Team, SUM(snelste_ronde_punten+race_punten-straf_punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE Team LIKE "Haas F1 Team"
                        UNION
                        SELECT drivers.Team AS Team, SUM(snelste_ronde_punten+race_punten-straf_punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE Team LIKE "Renault F1 Team"
                        UNION
                        SELECT drivers.Team AS Team, SUM(snelste_ronde_punten+race_punten-straf_punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE Team LIKE "Racing Point F1 Team"
                        UNION
                        SELECT drivers.Team AS Team, SUM(snelste_ronde_punten+race_punten-straf_punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE Team LIKE "Red Bull Toro Rosso Honda"
                        UNION
                        SELECT drivers.Team AS Team, SUM(snelste_ronde_punten+race_punten-straf_punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE Team LIKE "Alfa romeo racing"
                        UNION
                        SELECT drivers.Team AS Team, SUM(snelste_ronde_punten+race_punten-straf_punten) AS Punten
                        FROM race_results
                        LEFT JOIN drivers
                        ON race_results.driver = drivers.Naam
                        WHERE Team LIKE "Williams Racing"
                        ORDER BY punten DESC;