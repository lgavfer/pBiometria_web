# pBiometria_web
# Proyecto de Biometría y Medio Ambiente

## Descripción

Este proyecto utiliza una aplicación móvil para recoger beacons emitidos por un sensor. Estos datos se envían a una base
 de datos y se muestran en la pantalla de nuestro móvil, en tiempo real. A su vez, muestra todos los datos procesados de
 diferentes maneras en una web alojada en un servidor local creado en MAMP.

## Contenido
Este repositorio contiene la base de datos actualizada que recoje todos los datos enviados por el sensor. A su vez, contiene el directorio src que contiene los archivos necesarios para visualizar los datos en una aplicación web con pruebas automáticas. 

### Requisitos
- Arduino con sensor correspondiente
- MAMP o equivalente para servidor local
- Aplicación móvil para recoger beacons

## Instalación para únicamente visualizar los datos ya existentes
1. Instalar MAMP e iniciar el servidor local.
2. Ubicar correctamente la carpeta src dentro de la carpeta del servidor local.
3. Abrir en el navegador el enlace correspondiente.

## Instalación para recibir nuevos datos con el sensor y mostrar los resultados
1. Configurar Arduino y conectar el sensor.
2. Instalar MAMP e iniciar el servidor local.
3. Visitar la página web.
4. Instalar la aplicación móvil en tu dispositivo siguiendo las explicaciones de dicho repositorio.
5. Recagar la página para ver los nuevos datos captados automáticamente cada 10 segundos por nuestra aplicació móvil. 

## Autor

Laura Gavilán Fernández
