# **AuditoUN**  
Una solución de auditoría continua con enfoque en riesgos (RBA) para la Universidad Nacional de Colombia, sede Manizales.

---

## 📝 Descripción  
**AuditoUN** es una aplicación diseñada para fortalecer la integridad y seguridad de la información estudiantil en la Universidad Nacional de Colombia, sede Manizales. La herramienta se centra en la supervisión constante de los datos de los estudiantes inscritos en el período académico **2024-2**, garantizando la exactitud y fiabilidad de la información mediante la detección en tiempo real de modificaciones no autorizadas.

---

## 🎯 Propósito  
El objetivo principal de **AuditoUN** es asegurar la confiabilidad de los datos estudiantiles, previniendo y detectando cualquier manipulación no autorizada para proteger la integridad de los expedientes académicos y la gestión administrativa de la institución.

---

## 📌 Alcance  
El sistema audita la información crítica, tanto personal como académica, de los **4,884 estudiantes** matriculados en la sede Manizales durante el segundo semestre de **2024**.

---

## ⚠️ Amenaza Principal  
La principal amenaza abordada es la **manipulación no autorizada de la información estudiantil**, que representa un riesgo significativo para la integridad de los datos y la gestión administrativa.

---

## 🔍 Características  

- **Supervisión continua:** Monitoreo ininterrumpido de cambios en los registros estudiantiles.  
- **Alertas en tiempo real:** Emisión automática de alertas ante cualquier modificación de datos.  
- **Notificaciones inmediatas:** Envío de correos electrónicos al equipo de auditoría para una intervención rápida.  
- **Interfaz de gestión:** Visualización y manejo eficiente de las alertas generadas dentro de la aplicación.  

> Esta metodología de auditoría continua asegura un alto estándar de seguridad y confianza en la información estudiantil.

---

## 🛠️ Tecnologías Utilizadas  

- **Backend:** Laravel (framework de PHP).  
- **Base de Datos:** MySQL para la gestión de datos relacionales.  
- **Frontend:** Bootstrap para un diseño adaptable y moderno.  

> Estas tecnologías garantizan un sistema eficiente, escalable y de fácil mantenimiento.

---

## ⚙️ Instalación  

> **Nota:** Los detalles específicos de instalación no están incluidos en esta descripción. A continuación, se proporciona un esquema general.

```bash
# Clona el repositorio
git clone <URL-del-repositorio>

# Instala las dependencias del backend
cd auditoUN
composer install

# Configura la base de datos MySQL y actualiza el archivo .env con las credenciales

# Ejecuta las migraciones
php artisan migrate

# Instala las dependencias del frontend
npm install

# Inicia el servidor
php artisan serve
