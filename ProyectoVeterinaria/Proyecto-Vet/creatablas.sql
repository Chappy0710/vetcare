CREATE TABLE usuarios (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30),
    email VARCHAR(50),
    user VARCHAR(30),
    password VARCHAR(30),
    rol VARCHAR(30)
);

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
    