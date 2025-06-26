# AuditoUN: Auditoría Continua para Datos Estudiantiles

AuditoUN es una aplicación de software diseñada para salvaguardar la integridad de la información académica en la Universidad Nacional de Colombia, sede Manizales.

## 🎯 Propósito Principal

El objetivo del proyecto es implementar un sistema de vigilancia activa sobre los datos de los 4,884 estudiantes matriculados en el período 2023-2. Buscamos garantizar la confiabilidad de los registros, detectando y alertando sobre cualquier modificación no autorizada en tiempo real.

## 🛡️ Riesgo y Estrategia de Control

> El principal riesgo es la alteración maliciosa o accidental de datos críticos de los estudiantes, lo que puede comprometer la validez de su historial académico y administrativo.

Para mitigar este riesgo, **AuditoUN** implementa un robusto sistema de control:

* **Monitoreo Constante**: Supervisión automatizada 24/7 sobre la base de datos estudiantil.
* **Detección Instantánea**: Identificación de cualquier cambio en los registros.
* **Alertas Inteligentes**: Notificación inmediata al equipo de auditoría vía correo electrónico.
* **Dashboard de Incidencias**: Visualización centralizada de todas las alertas para un seguimiento y gestión eficientes.

## 🛠️ Arquitectura Tecnológica

La aplicación se construyó sobre un stack tecnológico sólido y escalable:

* **Backend**: Laravel (PHP), para una lógica de negocio segura y robusta.
* **Base de Datos**: MySQL, para la gestión eficiente del gran volumen de datos.
* **Frontend**: Bootstrap, para una interfaz de usuario limpia, intuitiva y responsiva.
