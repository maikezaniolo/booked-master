<?php
/**
Copyright 2011-2016 Nick Korbel

This file is part of Booked Scheduler.

Booked Scheduler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Booked Scheduler is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once('Language.php');
require_once('en_us.php');

class es extends en_us
{
    public function __construct()
    {
		parent::__construct();
    }

    protected function _LoadDates()
    {
		$dates = parent::_LoadDates();

		$dates['general_date'] = 'd/m/Y';
		$dates['general_datetime'] = 'd/m/Y H:i:s';
		$dates['short_datetime'] = 'n/j/y g:i A';
		$dates['schedule_daily'] = 'l, d/m/Y';
		$dates['reservation_email'] = 'd/m/Y @ g:i A (e)';
		$dates['res_popup'] = 'd/m/Y g:i A';
		$dates['short_reservation_date'] = 'n/j/y g:i A';
		$dates['dashboard'] = 'd/m/Y g:i A';
		$dates['period_time'] = "g:i A";
		$dates['mobile_reservation_date'] = 'n/j g:i A';
		$dates['general_date_js'] = "dd/mm/yy";
		$dates['general_time_js'] = 'h:mm tt';
		$dates['momentjs_datetime'] = 'D/M/YY h:mm A';
		$dates['calendar_time'] = 'h:mmt';
		$dates['calendar_dates'] = 'd/M';

		$this->Dates = $dates;
    }

    protected function _LoadStrings()
    {
		$strings = parent::_LoadStrings();

		$strings['FirstName'] = 'Nombre';
		$strings['LastName'] = 'Apellido';
		$strings['Timezone'] = 'Zona horaria';
		$strings['Edit'] = 'Editar';
		$strings['Change'] = 'Cambiar';
		$strings['Rename'] = 'Renombrar';
		$strings['Remove'] = 'Eliminar';
		$strings['Delete'] = 'Borrar';
		$strings['Update'] = 'Actualizar';
		$strings['Cancel'] = 'Cancelar';
		$strings['Add'] = 'Agregar';
		$strings['Name'] = 'Nombre';
		$strings['Yes'] = 'S??';
		$strings['No'] = 'No';
		$strings['FirstNameRequired'] = 'Se requiere un nombre.';
		$strings['LastNameRequired'] = 'Se requiere un apellido.';
		$strings['PwMustMatch'] = 'La contrase??a de confirmaci??n debe coincidir.';
		$strings['ValidEmailRequired'] = 'Se requiere una direcci??n v??lida de correo.';
		$strings['UniqueEmailRequired'] = 'Esa direcci??n de correo ya est?? registrada.';
		$strings['UniqueUsernameRequired'] = 'Ese nombre de usuario ya est?? registrado.';
		$strings['UserNameRequired'] = 'Se requiere un nombre de usuario.';
		$strings['CaptchaMustMatch'] = 'Por favor, introduce los caracteres de seguridad tal como aparecen.';
		$strings['Today'] = 'Hoy';
		$strings['Week'] = 'Semana';
		$strings['Month'] = 'Mes';
		$strings['BackToCalendar'] = 'Regreso al calendario';
		$strings['BeginDate'] = 'Inicio';
		$strings['EndDate'] = 'Fin';
		$strings['Username'] = 'Nombre de usuario';
		$strings['Password'] = 'Contrase??a';
		$strings['PasswordConfirmation'] = 'Confirmar contrase??a';
		$strings['DefaultPage'] = 'P??gina de inicio predeterminada';
		$strings['MyCalendar'] = 'Mi calendario';
		$strings['ScheduleCalendar'] = 'Calendario de reservas';
		$strings['Registration'] = 'Registro';
		$strings['NoAnnouncements'] = 'No hay anuncios';
		$strings['Announcements'] = 'Anuncios';
		$strings['NoUpcomingReservations'] = 'No tienes reservas pr??ximas';
		$strings['UpcomingReservations'] = 'Pr??ximas reservas';
		$strings['AllNoUpcomingReservations'] = 'No tienes reservas en los pr??ximos %s d??as';
		$strings['AllUpcomingReservations'] = 'Todas las reservas pr??ximas';
		$strings['ShowHide'] = 'Mostrar/Ocultar';
		$strings['Error'] = 'Error';
		$strings['ReturnToPreviousPage'] = 'Volver a la p??gina anterior';
		$strings['UnknownError'] = 'Error desconocido';
		$strings['InsufficientPermissionsError'] = 'No tienes permiso para acceder a este recurso';
		$strings['MissingReservationResourceError'] = 'No se ha seleccionado un recurso';
		$strings['MissingReservationScheduleError'] = 'No se ha seleccionado una planificaci??n';
		$strings['DoesNotRepeat'] = 'No se repite';
		$strings['Daily'] = 'Diario';
		$strings['Weekly'] = 'Semanal';
		$strings['Monthly'] = 'Mensual';
		$strings['Yearly'] = 'Anual';
		$strings['RepeatPrompt'] = 'Repetir';
		$strings['hours'] = 'horas';
		$strings['days'] = 'd??as';
		$strings['weeks'] = 'semanas';
		$strings['months'] = 'meses';
		$strings['years'] = 'a??os';
		$strings['day'] = 'd??a';
		$strings['week'] = 'semana';
		$strings['month'] = 'mes';
		$strings['year'] = 'a??o';
		$strings['repeatDayOfMonth'] = 'd??a del mes';
		$strings['repeatDayOfWeek'] = 'd??a de la semana';
		$strings['RepeatUntilPrompt'] = 'Hasta';
		$strings['RepeatEveryPrompt'] = 'Cada';
		$strings['RepeatDaysPrompt'] = 'En';
		$strings['CreateReservationHeading'] = 'Crear una nueva reserva';
		$strings['EditReservationHeading'] = 'Editando reserva %s';
		$strings['ViewReservationHeading'] = 'Viendo reserva %s';
		$strings['ReservationErrors'] = 'Cambiar reserva';
		$strings['Create'] = 'Crear';
		$strings['ThisInstance'] = 'S??lo esta instancia';
		$strings['AllInstances'] = 'Todas las instancias';
		$strings['FutureInstances'] = 'Instancias futuras';
		$strings['Print'] = 'Imprimir';
		$strings['ShowHideNavigation'] = 'Mostrar/Ocultar navegaci??n';
		$strings['ReferenceNumber'] = 'N??mero de referencia';
		$strings['Tomorrow'] = 'Ma??ana';
		$strings['LaterThisWeek'] = 'M??s tarde esta semana';
		$strings['NextWeek'] = 'Siguiente semana';
		$strings['SignOut'] = 'Cerrar';
		$strings['LayoutDescription'] = 'Empieza en %s, mostrando %s d??as cada vez';
		$strings['AllResources'] = 'Todos los recursos';
		$strings['TakeOffline'] = 'Deshabilitar';
		$strings['BringOnline'] = 'Habilitar';
		$strings['AddImage'] = 'Agregar imagen';
		$strings['NoImage'] = 'Sin imagen asignada';
		$strings['Move'] = 'Mover';
		$strings['AppearsOn'] = 'Aparece en %s';
		$strings['Location'] = 'Localizaci??n';
		$strings['NoLocationLabel'] = '(no se ha fijado una localizaci??n)';
		$strings['Contact'] = 'Contacto';
		$strings['NoContactLabel'] = '(sin informaci??n de contacto)';
		$strings['Description'] = 'Descripci??n';
		$strings['NoDescriptionLabel'] = '(sin descripci??n)';
		$strings['Notes'] = 'Notas';
		$strings['NoNotesLabel'] = '(sin notas)';
		$strings['NoTitleLabel'] = '(sin t??tulo)';
		$strings['UsageConfiguration'] = 'Configuraci??n de uso';
		$strings['ChangeConfiguration'] = 'Cambiar configuraci??n';
		$strings['ResourceMinLength'] = 'Las reservas deben durar por lo menos %s';
		$strings['ResourceMinLengthNone'] = 'No hay duraci??n m??nima de reserva';
		$strings['ResourceMaxLength'] = 'Las reservas no pueden durar m??s de %s';
		$strings['ResourceMaxLengthNone'] = 'No hay duraci??n m??xima de reserva';
		$strings['ResourceRequiresApproval'] = 'Las reservas deben ser aprobadas';
		$strings['ResourceRequiresApprovalNone'] = 'Las reservas no requieren ser aprobadas';
		$strings['ResourcePermissionAutoGranted'] = 'El permiso se concede autom??ticamente';
		$strings['ResourcePermissionNotAutoGranted'] = 'El permiso no se concede autom??ticamente';
		$strings['ResourceMinNotice'] = 'Las reservas deben realizarse al menos %s antes del tiempo de inicio';
		$strings['ResourceMinNoticeNone'] = 'Las reservas se pueden realizar hasta la hora actual';
		$strings['ResourceMaxNotice'] = 'Las reservas no deben durar m??s de %s desde la hora actual';
		$strings['ResourceMaxNoticeNone'] = 'Las reservas pueden terminar en cualquier momento futuro';
		$strings['ResourceBufferTime'] = 'Debe de haber %s entre reservas';
		$strings['ResourceBufferTimeNone'] = 'No hay tiempo entre reservas';
		$strings['ResourceAllowMultiDay'] = 'Las reservas pueden extenderse a lo largo de d??as';
		$strings['ResourceNotAllowMultiDay'] = 'Las reservas no pueden extenderse a lo largo de d??as';
		$strings['ResourceCapacity'] = 'Este recurso tiene una capacidad de %s personas';
		$strings['ResourceCapacityNone'] = 'Este recurso tiene capacidad ilimitada';
		$strings['AddNewResource'] = 'Agregar nuevo recurso';
		$strings['AddNewUser'] = 'Agregar nuevo usuario';
		$strings['AddUser'] = 'Agregar usuario';
		$strings['Schedule'] = 'Planificaci??n';
		$strings['AddResource'] = 'Agregar recurso';
		$strings['Capacity'] = 'Capacidad';
		$strings['Access'] = 'Acceso';
		$strings['Duration'] = 'Duraci??n';
		$strings['Active'] = 'Activo';
		$strings['Inactive'] = 'Inactivo';
		$strings['ResetPassword'] = 'Restablecer contrase??a';
		$strings['LastLogin'] = '??ltimo inicio de sesi??n';
		$strings['Search'] = 'Buscar';
		$strings['ResourcePermissions'] = 'Permisos del recurso';
		$strings['Reservations'] = 'Reservas';
		$strings['Groups'] = 'Grupos';
		$strings['Users'] = 'Usuarios';
		$strings['ResetPassword'] = 'Restablecer contrase??a';
		$strings['AllUsers'] = 'Todos los usuarios';
		$strings['AllGroups'] = 'Todos los grupos';
		$strings['AllSchedules'] = 'Todas las planificaciones';
		$strings['UsernameOrEmail'] = 'Nombre de usuario o correo electr??nico';
		$strings['Members'] = 'Miembros';
		$strings['QuickSlotCreation'] = 'Crear un intervalo de tiempo cada %s minutos entre %s y %s';
		$strings['ApplyUpdatesTo'] = 'Aplicar actualizaciones a';
		$strings['CancelParticipation'] = 'Cancelar participaci??n';
		$strings['Attending'] = 'Asistencia';
		$strings['QuotaConfiguration'] = 'En %s para %s usuarios en %s est??n limitados a %s %s por cada %s';
		$strings['QuotaEnforcement'] = 'Impuesto %s %s';
		$strings['reservations'] = 'reservas';
		$strings['reservation'] = 'reserva';
		$strings['ChangeCalendar'] = 'Cambiar calendario';
		$strings['AddQuota'] = 'Agregar cuota';
		$strings['FindUser'] = 'Encontrar usuario';
		$strings['Created'] = 'Creado';
		$strings['LastModified'] = '??ltima modificaci??n';
		$strings['GroupName'] = 'Nombre de grupo';
		$strings['GroupMembers'] = 'Miembros del grupo';
		$strings['GroupRoles'] = 'Roles del grupo';
		$strings['GroupAdmin'] = 'Administrador del grupo';
		$strings['Actions'] = 'Acciones';
		$strings['CurrentPassword'] = 'Contrase??a actual';
		$strings['NewPassword'] = 'Nueva contrase??a';
		$strings['InvalidPassword'] = 'La contrase??a actual es incorrecta';
		$strings['PasswordChangedSuccessfully'] = 'Tu contrase??a se ha modificado correctamente';
		$strings['SignedInAs'] = 'Sesi??n iniciada por ';
		$strings['NotSignedIn'] = 'No has iniciado sesi??n';
		$strings['ReservationTitle'] = 'T??tulo de la reserva';
		$strings['ReservationDescription'] = 'Descripci??n de la reserva';
		$strings['ResourceList'] = 'Recursos a reservar';
		$strings['Accessories'] = 'Accesorios';
		$strings['ParticipantList'] = 'Participantes';
		$strings['InvitationList'] = 'Invitados';
		$strings['AccessoryName'] = 'Nombre de accesorio';
		$strings['QuantityAvailable'] = 'Cantidad disponible';
		$strings['Resources'] = 'Recursos';
		$strings['Participants'] = 'Participantes';
		$strings['User'] = 'Usuario';
		$strings['Resource'] = 'Recurso';
		$strings['Status'] = 'Estado';
		$strings['Approve'] = 'Aprobado';
		$strings['Page'] = 'P??gina';
		$strings['Rows'] = 'Filas';
		$strings['Unlimited'] = 'Ilimitado';
		$strings['Email'] = 'Correo';
		$strings['EmailAddress'] = 'Direci??n de Correo';
		$strings['Phone'] = 'Tel??fono';
		$strings['Organization'] = 'Organizaci??n';
		$strings['Position'] = 'Posici??n';
		$strings['Language'] = 'Idioma';
		$strings['Permissions'] = 'Permisos';
		$strings['Reset'] = 'Reiniciar';
		$strings['FindGroup'] = 'Encontrar grupo';
		$strings['Manage'] = 'Gestionar';
		$strings['None'] = 'Ninguno';
		$strings['AddToOutlook'] = 'Agregar a Outlook';
		$strings['Done'] = 'Hecho';
		$strings['RememberMe'] = 'Recu??rdame';
		$strings['FirstTimeUser?'] = '??Eres un usuario nuevo?';
		$strings['CreateAnAccount'] = 'Crear cuenta';
		$strings['ViewSchedule'] = 'Ver planificaci??n';
		$strings['ForgotMyPassword'] = 'He olvidado mi contrase??a';
		$strings['YouWillBeEmailedANewPassword'] = 'Se te enviar?? una contrase??a generada aleatoriamente.';
		$strings['Close'] = 'Cerrar';
		$strings['ExportToCSV'] = 'Exportar a CSV';
		$strings['OK'] = 'OK';
		$strings['Working'] = 'Trabajando...';
		$strings['Login'] = 'Iniciar sesi??n';
		$strings['AdditionalInformation'] = 'Informaci??n adicional';
		$strings['AllFieldsAreRequired'] = 'Se requieren todos los campos';
		$strings['Optional'] = 'opcional';
		$strings['YourProfileWasUpdated'] = 'Se ha actualizado el perfil';
		$strings['YourSettingsWereUpdated'] = 'Se han actualizado los ajustes';
		$strings['Register'] = 'Registrar';
		$strings['SecurityCode'] = 'C??digo de seguridad';
		$strings['ReservationCreatedPreference'] = 'Cuando creo una reserva o una reserva se crea en mi nombre';
		$strings['ReservationUpdatedPreference'] = 'Cuando actualizo una reserva o una reserva se actualiza en mi nombre';
		$strings['ReservationDeletedPreference'] = 'Cuando borro una reserva o se borra una reserva en mi nombre';
		$strings['ReservationApprovalPreference'] = 'Cuando mi reserva pendiente ha sido aprobada';
		$strings['PreferenceSendEmail'] = 'Env??ame un correo';
		$strings['PreferenceNoEmail'] = 'No me notifiques';
		$strings['ReservationCreated'] = '??Tu reserva se ha creado correctamente!';
		$strings['ReservationUpdated'] = '??Tu reserva se ha actualizado correctamente!';
		$strings['ReservationRemoved'] = 'Tu reserva se ha eliminado';
		$strings['ReservationRequiresApproval'] = 'Uno o m??s de los recursos reservados requieren aprobaci??n antes de su uso. Esta reserva quear?? pendiente hasta que sea aprobada.';
		$strings['YourReferenceNumber'] = 'Tu n??mero de referencia es %s';
		$strings['UpdatingReservation'] = 'Actualizando reserva';
		$strings['ChangeUser'] = 'Cambiar usuario';
		$strings['MoreResources'] = 'M??s recursos';
		$strings['ReservationLength'] = 'Duraci??n de la reserva';
		$strings['ParticipantList'] = 'Lista de participantes';
		$strings['AddParticipants'] = 'Agregar participantes';
		$strings['InviteOthers'] = 'Invitar a otros';
		$strings['AddResources'] = 'Agregar recursos';
		$strings['AddAccessories'] = 'Agregar Accesorios';
		$strings['Accessory'] = 'Accesorio';
		$strings['QuantityRequested'] = 'Cantidad requerida';
		$strings['CreatingReservation'] = 'Creando reserva';
		$strings['UpdatingReservation'] = 'Actualizando reserva';
		$strings['DeleteWarning'] = '??Esta acci??n es permanente e irrecuperable!';
		$strings['DeleteAccessoryWarning'] = 'Al borrar este accesorio se eliminar?? de todas las reservas.';
		$strings['AddAccessory'] = 'Agregar accesorio';
		$strings['AddBlackout'] = 'Agregar No Disponibilidad';
		$strings['AllResourcesOn'] = 'Todos los recursos habilitados';
		$strings['Reason'] = 'Raz??n';
		$strings['BlackoutShowMe'] = 'Mu??strame reservas en conflicto';
		$strings['BlackoutDeleteConflicts'] = 'Borrar las reservas en conflicto';
		$strings['Filter'] = 'Filtrar';
		$strings['Between'] = 'Entre';
		$strings['CreatedBy'] = 'Creada por';
		$strings['BlackoutCreated'] = 'Se ha creado la no disponibilidad';
		$strings['BlackoutNotCreated'] = 'No se ha podido crear la no disponibilidad';
		$strings['BlackoutUpdated'] = 'Se ha actualizado la no disponibilidad';
		$strings['BlackoutNotUpdated'] = 'No se pudo actualizar la no disponibilidad';
		$strings['BlackoutConflicts'] = 'Hay tiempos de no disponibilidad en conflicto';
		$strings['ReservationConflicts'] = 'Hay tiempos de reserva en conflicto';
		$strings['UsersInGroup'] = 'Usuarios en este grupo';
		$strings['Browse'] = 'Navegar';
		$strings['DeleteGroupWarning'] = 'Al borrar este grupo se eliminar??n todos los permisos de los recursos asociados.  Los usuarios en este grupo pueden perder acceso a los recursos.';
		$strings['WhatRolesApplyToThisGroup'] = '??Qu?? roles aplican a este grupo?';
		$strings['WhoCanManageThisGroup'] = '??Qui??n puede gestionar este grupo?';
		$strings['WhoCanManageThisSchedule'] = '??Qui??n puede gestionar esta planificaci??n?';
		$strings['AddGroup'] = 'Agregar grupo';
		$strings['AllQuotas'] = 'Todas las cuotas';
		$strings['QuotaReminder'] = 'Recordatorio: las cuotas se fijan bas??ndose en la zona horaria de las planificaciones.';
		$strings['AllReservations'] = 'Todas las reservas';
		$strings['PendingReservations'] = 'Reservas pendientes';
		$strings['Approving'] = 'Aprobando';
		$strings['MoveToSchedule'] = 'Mover a planificaci??n';
		$strings['DeleteResourceWarning'] = 'Al borrar este recurso se eliminar??n todos los datos asociados, incluyendo';
		$strings['DeleteResourceWarningReservations'] = 'todos las reservas pasadas, actuales y futuras asociadas';
		$strings['DeleteResourceWarningPermissions'] = 'todas las asignaciones de permisos';
		$strings['DeleteResourceWarningReassign'] = 'Por favor reasigna todo lo que no quieras que sea borrado antes de continuar';
		$strings['ScheduleLayout'] = 'Distribuci??n horaria (todas las veces %s)';
		$strings['ReservableTimeSlots'] = 'Intervalos de tiempo reservables';
		$strings['BlockedTimeSlots'] = 'Intervalos de tiempo bloqueados';
		$strings['ThisIsTheDefaultSchedule'] = 'Esta es la planificaci??n predeterminada';
		$strings['DefaultScheduleCannotBeDeleted'] = 'La planificaci??n predeterminada no se puede eliminar';
		$strings['MakeDefault'] = 'Hacer predeterminada';
		$strings['BringDown'] = 'Deshabilitar';
		$strings['ChangeLayout'] = 'Cambiar distribuci??n horaria';
		$strings['AddSchedule'] = 'Agregar planificaci??n';
		$strings['StartsOn'] = 'Comienza en';
		$strings['NumberOfDaysVisible'] = 'N??meros de d??as visibles';
		$strings['UseSameLayoutAs'] = 'Usar la misma distribuci??n horaria que';
		$strings['Format'] = 'Formato';
		$strings['OptionalLabel'] = 'Etiqueta opcional';
		$strings['LayoutInstructions'] = 'Introduce un intervalo de tiempo por l??nea. Se deben proporcionar intervalos de tiempo para las 24 horas del d??a comenzando y terminando a las 12:00 AM.';
		$strings['AddUser'] = 'Agregar usuario';
		$strings['UserPermissionInfo'] = 'El acceso real a los recursos puede ser diferente dependiendo de los roles del usuario, permisos de grupo, o ajustes externos de permisos';
		$strings['DeleteUserWarning'] = 'Al borrar este usuario se eliminar??n todas sus reservas actuales, futuras y pasadas.';
		$strings['AddAnnouncement'] = 'Agregar anuncio';
		$strings['Announcement'] = 'Anuncio';
		$strings['Priority'] = 'Prioridad';
		$strings['Reservable'] = 'Reservable';
		$strings['Unreservable'] = 'No reservable';
		$strings['Reserved'] = 'Reservado';
		$strings['MyReservation'] = 'Mi reserva';
		$strings['Pending'] = 'Pendiente';
		$strings['Past'] = 'Pasado';
		$strings['Restricted'] = 'Restringido';
		$strings['ViewAll'] = 'Ver todo';
		$strings['MoveResourcesAndReservations'] = 'Mover recursos y reservas a';
		$strings['TurnOffSubscription'] = 'Desactivar suscripciones en calendario';
		$strings['TurnOnSubscription'] = 'Activar suscripciones en calendario';
		$strings['SubscribeToCalendar'] = 'Subscribirse a este calendario';
		$strings['SubscriptionsAreDisabled'] = 'El administrador ha deshabilitado las suscripciones a este calendario';
		$strings['NoResourceAdministratorLabel'] = '(No hay administrador de recurso)';
		$strings['WhoCanManageThisResource'] = '??Qui??n puede administrar este recurso?';
		$strings['ResourceAdministrator'] = 'Administrador de recurso';
		$strings['Private'] = 'Privado';
		$strings['Accept'] = 'Aceptar';
		$strings['Decline'] = 'Rechazar';
		$strings['ShowFullWeek'] = 'Mostrar semana completa';
		$strings['CustomAttributes'] = 'Personalizar atributos';
		$strings['AddAttribute'] = 'Agregar un atributo';
		$strings['EditAttribute'] = 'Editar un atributo';
		$strings['DisplayLabel'] = 'Etiqueta visible';
		$strings['Type'] = 'Tipo';
		$strings['Required'] = 'Requerido';
		$strings['ValidationExpression'] = 'Expresi??n de validaci??n';
		$strings['PossibleValues'] = 'Posibles valores';
		$strings['SingleLineTextbox'] = 'Caja de texto de una sola l??nea';
		$strings['MultiLineTextbox'] = 'Caja de texto de m??ltiples l??neas';
		$strings['Checkbox'] = 'Casilla de verificaci??n';
		$strings['SelectList'] = 'Lista de selecci??n';
		$strings['CommaSeparated'] = 'separado por comas';
		$strings['Category'] = 'Categor??a';
		$strings['CategoryReservation'] = 'Reserva';
		$strings['CategoryGroup'] = 'Grupo';
		$strings['SortOrder'] = 'Orden';
		$strings['Title'] = 'T??tulo';
		$strings['AdditionalAttributes'] = 'Atributos adicionales';
		$strings['True'] = 'Verdadero';
		$strings['False'] = 'Falso';
		$strings['ForgotPasswordEmailSent'] = 'Se ha enviado un correo electr??nico a la direcci??n proporcionada, con instrucciones para restablecer la contrase??a';
		$strings['ActivationEmailSent'] = 'Pronto recibir??s un correo de activaci??n.';
		$strings['AccountActivationError'] = 'Lo siento, no hemos podido activar la cuenta.';
		$strings['Attachments'] = 'Adjuntos';
		$strings['AttachFile'] = 'Adjuntar archivo';
		$strings['Maximum'] = 'm??ximo';
		$strings['NoScheduleAdministratorLabel'] = 'No hay administrador de calendario';
		$strings['ScheduleAdministrator'] = 'Administrador de calendario';
		$strings['Total'] = 'Total';
		$strings['QuantityReserved'] = 'Cantidad Reservada';
		$strings['AllAccessories'] = 'Todos los accesorios';
		$strings['GetReport'] = 'Obtener informe';
		$strings['NoResultsFound'] = 'No hemos encontrado coincidencias';
		$strings['SaveThisReport'] = 'Guardar este informe';
		$strings['ReportSaved'] = '??Informe guardado!';
		$strings['EmailReport'] = 'Enviar informe por correo';
		$strings['ReportSent'] = '??Informe enviado!';
		$strings['RunReport'] = 'Generar informe';
		$strings['NoSavedReports'] = 'No has guardado el informe.';
		$strings['CurrentWeek'] = 'Semana actual';
		$strings['CurrentMonth'] = 'Mes actual';
		$strings['AllTime'] = 'Todo el tiempo';
		$strings['FilterBy'] = 'Filtrar por';
		$strings['Select'] = 'Seleccionar';
		$strings['List'] = 'Lista';
		$strings['TotalTime'] = 'Tiempo total';
		$strings['Count'] = 'Cuenta';
		$strings['Usage'] = 'Uso';
		$strings['AggregateBy'] = 'Agregar por';
		$strings['Range'] = 'Rango';
		$strings['Choose'] = 'Elegir';
		$strings['All'] = 'Todo';
		$strings['ViewAsChart'] = 'Ver como gr??fico';
		$strings['ReservedResources'] = 'Recurso reservado';
		$strings['ReservedAccessories'] = 'Accesorio reservado';
		$strings['ResourceUsageTimeBooked'] = 'Uso de recurso - tiempo reservado';
		$strings['ResourceUsageReservationCount'] = 'Uso de recurso - n??mero de reservas';
		$strings['Top20UsersTimeBooked'] = 'Top 20 - Tiempo reservado';
		$strings['Top20UsersReservationCount'] = 'Top 20 - N??mero de reservas';
		$strings['ConfigurationUpdated'] = 'Se actualiz?? el fichero de configuraci??n';
		$strings['ConfigurationUiNotEnabled'] = 'No se puede acceder a esta p??gina porque $conf[\'settings\'][\'pages\'][\'enable.configuration\'] est?? configurado a Falso.';
		$strings['ConfigurationFileNotWritable'] = 'El fichero de configuraci??n no es editable. Por favor compruebe los permisos de este fichero e int??ntelo de nuevo.';
		$strings['ConfigurationUpdateHelp'] = 'Vaya a la secci??n de Configuraci??n del <a target=_blank href=%s>Archivo de ayuda</a> para documentaci??n sobre estas opciones.';
		$strings['GeneralConfigSettings'] = 'opciones';
		$strings['UseSameLayoutForAllDays'] = 'Usar la misma distribuci??n horaria para todos los d??as';
		$strings['LayoutVariesByDay'] = 'La distribuci??n horaria var??a por d??as';
		$strings['ManageReminders'] = 'Recordatorios';
		$strings['ReminderUser'] = 'ID de usuario';
		$strings['ReminderMessage'] = 'Mensaje';
		$strings['ReminderAddress'] = 'Direcciones';
		$strings['ReminderSendtime'] = 'Hora de env??o';
		$strings['ReminderRefNumber'] = 'N??mero de referencia de la reserva';
		$strings['ReminderSendtimeDate'] = 'Fecha del recordatorio';
		$strings['ReminderSendtimeTime'] = 'Hora del recordatorio (HH:MM)';
		$strings['ReminderSendtimeAMPM'] = 'AM / PM';
		$strings['AddReminder'] = 'Agregar recordatorio';
		$strings['DeleteReminderWarning'] = '??Est??s seguro?';
		$strings['NoReminders'] = 'No tienes recordatorios pr??ximos.';
		$strings['Reminders'] = 'Recordatorios';
		$strings['SendReminder'] = 'Enviar recordatorio';
		$strings['minutes'] = 'minutos';
		$strings['hours'] = 'horas';
		$strings['days'] = 'd??as';
		$strings['ReminderBeforeStart'] = 'antes de la hora de inicio';
		$strings['ReminderBeforeEnd'] = 'antes de la hora de finalizaci??n';
		$strings['Logo'] = 'Logo';
		$strings['CssFile'] = 'Archivo CSS';
		$strings['ThemeUploadSuccess'] = 'Se han guardado los cambios. Actualiza la p??gina para hacer efectivos los cambios.';
		$strings['MakeDefaultSchedule'] = 'Hacer esta planificaci??n mi planificaci??n predeterminada';
		$strings['DefaultScheduleSet'] = 'Ahora ??sta es tu planificaci??n predeterminada';
		$strings['FlipSchedule'] = 'Girar la distribuci??n de la planificaci??n';
		$strings['Next'] = 'Siguiente';
		$strings['Success'] = '??xito';
		$strings['Participant'] = 'Participante';
		$strings['ResourceFilter'] = 'Filtro de recursos';
		$strings['ResourceGroups'] = 'Grupos de recursos';
		$strings['AddNewGroup'] = 'Agregar un nuevo grupo';
		$strings['Quit'] = 'Salir';
		$strings['AddGroup'] = 'Agregar grupo';
		$strings['StandardScheduleDisplay'] = 'Usar la vista de programaci??n est??ndar';
		$strings['TallScheduleDisplay'] = 'Usar la vista de programaci??n alargada';
		$strings['WideScheduleDisplay'] = 'Usar la vista de programaci??n ancha';
		$strings['CondensedWeekScheduleDisplay'] = 'Usar la vista de programaci??n de semana condensada';
		$strings['ResourceGroupHelp1'] = 'Arrastra los grupos de recursos a organizar.';
		$strings['ResourceGroupHelp2'] = 'Haz clic con el bot??n derecho sobre el nombre de un grupo de recursos para acciones adicionales.';
		$strings['ResourceGroupHelp3'] = 'Arrastra los recursos para agregarlos a los grupos.';
		$strings['ResourceGroupWarning'] = 'Si usas los grupos de recursos, cada recurso debe estar asignado al menos a un grupo. Los recursos no asignados no estar??n disponibles para ser reservados.';
		$strings['ResourceType'] = 'Tipo de recurso';
		$strings['AppliesTo'] = 'Aplica a';
		$strings['UniquePerInstance'] = '??nico por instancia';
		$strings['AddResourceType'] = 'Agregar tipo de recurso';
		$strings['NoResourceTypeLabel'] = '(no est?? establecido el tipo de recurso)';
		$strings['ClearFilter'] = 'Limpiar filtro';
		$strings['MinimumCapacity'] = 'Capacidad m??nima';
		$strings['Color'] = 'Color';
		$strings['Available'] = 'Disponible';
		$strings['Unavailable'] = 'No disponible';
		$strings['Hidden'] = 'Oculto';
		$strings['ResourceStatus'] = 'Estado del recurso';
		$strings['CurrentStatus'] = 'Estado actual';
		$strings['AllReservationResources'] = 'Todos los recursos de las reservas';
		$strings['File'] = 'Fichero';
		$strings['BulkResourceUpdate'] = 'Actualizaci??n masiva de recursos';
		$strings['Unchanged'] = 'Sin cambios';
		$strings['Common'] = 'Com??n';
		$strings['AdminOnly'] = 'Solo administradores';
		$strings['AdvancedFilter'] = 'Filtro avanzado';
		$strings['MinimumQuantity'] = 'Cantidad m??nima';
		$strings['MaximumQuantity'] = 'Cantidad m??xima';
		$strings['ChangeLanguage'] = 'Cambiar idioma';
		$strings['AddRule'] = 'Agregar regla';
		$strings['Attribute'] = 'Atributo';
		$strings['RequiredValue'] = 'Valor requerido';
		$strings['ReservationCustomRuleAdd'] = 'Si %s entonces la reserva ser?? de color';
		$strings['AddReservationColorRule'] = 'Agregar regla de color de reserva';
		$strings['LimitAttributeScope'] = 'Recopilar en casos espec??ficos';
		$strings['CollectFor'] = 'Recopilar para';
		$strings['SignIn'] = 'Iniciar sesi??n';
		$strings['AllParticipants'] = 'Todos los participantes';
		$strings['RegisterANewAccount'] = 'Registrar una nueva cuenta';
		$strings['Dates'] = 'Fechas';
		$strings['More'] = 'M??s';
		$strings['ResourceAvailability'] = 'Disponibilidad del recurso';
		$strings['UnavailableAllDay'] = 'No disponible en todo el d??a';
		$strings['AvailableUntil'] = 'Disponible hasta las';
		$strings['AvailableBeginningAt'] = 'Disponible desde las';
		$strings['AllResourceTypes'] = 'Todos los tipos de recursos';
		$strings['AllResourceStatuses'] = 'Todos los estados de los recursos';
		$strings['AllowParticipantsToJoin'] = 'Permitir a los participantes unirse';
		$strings['Join'] = 'Unirse';
		$strings['YouAreAParticipant'] = 'Participas en esta reserva';
		$strings['YouAreInvited'] = 'Est??s invitado a esta reserva';
		$strings['YouCanJoinThisReservation'] = 'Puedes unirte a esta reserva';
		$strings['Import'] = 'Importar';
		$strings['GetTemplate'] = 'Obtener plantilla';
		$strings['UserImportInstructions'] = 'El archivo debe estar en formato CSV. El nombre de usuario y el correo son campos obligatorios. Dejar otros campos en blanco establecer?? valores predeterminados y \'password\' como la contrase??a del usuario. Usa la plantilla proporcionada como ejemplo.';
		$strings['RowsImported'] = 'Filas importadas';
		$strings['RowsSkipped'] = 'Columnas omitidas';
		$strings['Columns'] = 'Columnas';
		$strings['Reserve'] = 'Reservar';
		$strings['AllDay'] = 'Todo el d??a';
		$strings['Everyday'] = 'Todos los d??as';
		$strings['IncludingCompletedReservations'] = 'Incluyendo las reservas completadas';
		$strings['NotCountingCompletedReservations'] = 'Sin incluir las reservas completadas';
		$strings['RetrySkipConflicts'] = 'Omitir las reservas que entran en conflicto';
		$strings['Retry'] = 'Reintentar';
		$strings['RemoveExistingPermissions'] = '??Eliminar los permisos existentes?';
		$strings['Continue'] = 'Continuar';
		$strings['WeNeedYourEmailAddress'] = 'Necesitamos el correo electr??nico para reservar';
		$strings['ResourceColor'] = 'Color del recurso';
		$strings['DateTime'] = 'Fecha Hora';
		$strings['AutoReleaseNotification'] = 'Autom??ticamente liberado si no se hace ??check in?? en %s minutos';
		$strings['RequiresCheckInNotification'] = 'Requiere ??check in??/??check out??';
		$strings['NoCheckInRequiredNotification'] = 'No requiere ??check in??/??check out??';
		$strings['RequiresApproval'] = 'Requiere aprobaci??n';
		$strings['CheckingIn'] = 'Haciendo ??check in??';
		$strings['CheckingOut'] = 'Haciendo ??check out??';
		$strings['CheckIn'] = '??Check in??';
		$strings['CheckOut'] = '??Check out??';
		$strings['ReleasedIn'] = 'Liberado en ';
		$strings['CheckedInSuccess'] = '??Check in?? realizado';
		$strings['CheckedOutSuccess'] = '??Check out?? realizado';
		$strings['CheckInFailed'] = 'No se pudo hacer el ??check in??';
		$strings['CheckOutFailed'] = 'No se pudo hacer el ??check out??';
		$strings['CheckInTime'] = 'Hora de ??check in??';
		$strings['CheckOutTime'] = 'Hora de ??check out??';
		$strings['OriginalEndDate'] = 'Finalizaci??n original';
		$strings['SpecificDates'] = 'Mostrar fechas espec??ficas';
		$strings['Users'] = 'Usuarios';
		$strings['Guest'] = 'Invitado';
		$strings['ResourceDisplayPrompt'] = 'Recurso a mostrar';
		$strings['Credits'] = 'Cr??ditos';
		$strings['AvailableCredits'] = 'Cr??ditos disponibles';
		$strings['CreditUsagePerSlot'] = 'Requiere %s cr??ditos por por intervalo (valle)';
		$strings['PeakCreditUsagePerSlot'] = 'Requiere %s cr??ditos por intervalo (pico)';
		$strings['CreditsRule'] = 'No tienes cr??dito suficiente. Cr??ditos necesarios: %s. Cr??ditos en cuenta: %s';
		$strings['PeakTimes'] = 'Horas pico';
		$strings['AllYear'] = 'Todo el a??o';
		$strings['MoreOptions'] = 'M??s opciones';
		$strings['SendAsEmail'] = 'Enviar por correo';
		$strings['UsersInGroups'] = 'Usuarios en grupos';
		$strings['UsersWithAccessToResources'] = 'Usuarios con acceso a recursos';
		$strings['AnnouncementSubject'] = '%s ha publicado un nuevo anuncio';
		$strings['AnnouncementEmailNotice'] = 'los usuarios recibir??n este anuncio por correo';
		// End Strings

		// Install
		$strings['InstallApplication'] = 'Instalar Booked Scheduler (solo MySQL)';
		$strings['IncorrectInstallPassword'] = 'Lo siento, la contrase??a no es correcta.';
		$strings['SetInstallPassword'] = 'Debes establecer una contrase??a de instalaci??n antes de iniciar la instalaci??n.';
		$strings['InstallPasswordInstructions'] = 'En %s por favor establece %s a una contrase??a aleatoria y dif??cil de adivinar, entonces vuelve a esta p??gina.<br/>Puedes usar %s';
		$strings['NoUpgradeNeeded'] = 'No es necesaria una actualizaci??n. ??Ejecutar el proceso de instalaci??n borrar?? todos los datos existentes e instalar?? una copia nueva de Booked Scheduler!';
		$strings['ProvideInstallPassword'] = 'Por favor proporciona la contrase??a de instalaci??n.';
		$strings['InstallPasswordLocation'] = 'Puede encontrarse en %s en %s.';
		$strings['VerifyInstallSettings'] = 'Verifica las siguientes opciones predeterminadas antes de continuar. O puedes cambiarlas en %s.';
		$strings['DatabaseName'] = 'Nombre de la base de datos';
		$strings['DatabaseUser'] = 'Usuario de la base de datos';
		$strings['DatabaseHost'] = 'Servidor de la base de datos';
		$strings['DatabaseCredentials'] = 'Debes proporcionar credenciales de un usuario de MySQL que tenga privilegios para crear bases de datos. Si no sabes cu??, contacta con el administrador de bases de datos. Em muchos casos, ??root?? funcionar??.';
		$strings['MySQLUser'] = 'Usuario de MySQL';
		$strings['InstallOptionsWarning'] = 'Las siguientes opciones probablemente no funcionen en un entorno alojado. Si est??s instalando en un entorno alojado, usa las herramientas de asistencia de MySQL para completar estos pasos.';
		$strings['CreateDatabase'] = 'Crear la base de datos';
		$strings['CreateDatabaseUser'] = 'Crear el usuario de la base de datos';
		$strings['PopulateExampleData'] = 'Importar datos de ejemplo. Crea la cuenta de administrador: admin/password y la cuenta de usuario: user/password';
		$strings['DataWipeWarning'] = 'Aviso: esto borrar?? los datos existentes';
		$strings['RunInstallation'] = 'Ejecutar la instalaci??n';
		$strings['UpgradeNotice'] = 'Est??s actualizando desde la versi??n <b>%s</b> a la versi??n <b>%s</b>';
		$strings['RunUpgrade'] = 'Ejecutar actualizaci??n';
		$strings['Executing'] = 'Ejecutando';
		$strings['StatementFailed'] = 'Error. Detalles:';
		$strings['SQLStatement'] = 'Sentencia SQL:';
		$strings['ErrorCode'] = 'C??digo de error:';
		$strings['ErrorText'] = 'Texto del error:';
		$strings['InstallationSuccess'] = '??La instalaci??n se ha completado correctamente!';
		$strings['RegisterAdminUser'] = 'Registra tu usuario administrador. Esto es necesario si no importaste los datos de ejemplo. Aseg??rate de que  $conf[\'settings\'][\'allow.self.registration\'] = \'true\' en el archivo %s.';
		$strings['LoginWithSampleAccounts'] = 'Si importaste los datos de ejemplo, puedes iniciar sesi??n con admin/password para usuario administrador o user/password para usuario b??sico.';
		$strings['InstalledVersion'] = 'Ahora est??s ejecutando la versi??n %s de Booked Scheduler';
		$strings['InstallUpgradeConfig'] = 'Se recomienda actualizar el archivo de configuraci??n';
		$strings['InstallationFailure'] = 'Hubo problemas con la instalaci??n. Por favor, corr??gelos y reintenta la instalaci??n.';
		$strings['ConfigureApplication'] = 'Configurar Booked Scheduler';
		$strings['ConfigUpdateSuccess'] = '??El archivo de configuraci??n se ha actualizado!';
		$strings['ConfigUpdateFailure'] = 'No pudimos actualizar autom??ticamente el archivo de configuraci??n. Por favor sobreescribe el contenido de config.php con lo siguiente:';
		$strings['SelectUser'] = 'Seleccionar usuario';
		// End Install


		// Errors
		$strings['LoginError'] = 'No se ha encontrado una correspondencia para tu Nombre de Usuario (Identificador) y contrase??a';
		$strings['ReservationFailed'] = 'Tu reserva no se ha podido realizar';
		$strings['MinNoticeError'] = 'Esta reserva se debe realizar por anticipado.  La fecha m??s temprana que puede ser reservada %s.';
		$strings['MaxNoticeError'] = 'Esta reserva no se puede alargar tan lejos en el futuro. La ??ltima fecha en la que se puede reservar es %s.';
		$strings['MinDurationError'] = 'Esta reserva debe durar al menos %s.';
		$strings['MaxDurationError'] = 'Esta reserva no puede durar m??s de %s.';
		$strings['ConflictingAccessoryDates'] = 'No hay suficientes de los siguientes accesorios:';
		$strings['NoResourcePermission'] = 'No tienes permisos para acceder uno o m??s de los recursos requeridos';
		$strings['ConflictingReservationDates'] = 'Hay conflictos en las reservas de las siguientes fechas:';
		$strings['StartDateBeforeEndDateRule'] = 'La fecha de inicio debe ser anterior a la fecha final';
		$strings['StartIsInPast'] = 'La fecha inicial no puede ser pasada';
		$strings['EmailDisabled'] = 'El administrador ha desactivado las notificaciones por correo';
		$strings['ValidLayoutRequired'] = 'Se deben proporcionar intervalos de tiempo para las 24 horas del d??a comenzando y terminando a las 12:00 AM.';
		$strings['CustomAttributeErrors'] = 'Hay problemas con los atributos adicionales que proporcionaste:';
		$strings['CustomAttributeRequired'] = '%s es un campo requerido.';
		$strings['CustomAttributeInvalid'] = 'El valor proporcionado para %s no es v??lido.';
		$strings['AttachmentLoadingError'] = 'Lo siento, hubo un problema con el fichero solicitado.';
		$strings['InvalidAttachmentExtension'] = 'Solamente puedes subir ficheros de tipo: %s';
		$strings['InvalidStartSlot'] = 'La fecha y hora de comienzo solicitada no es v??lida.';
		$strings['InvalidEndSlot'] = 'La fecha y hora de finalizaci??n solicitada no es v??lido.';
		$strings['MaxParticipantsError'] = '%s puede soportar %s participantes solamente.';
		$strings['ReservationCriticalError'] = 'Hubo un error cr??tico guardando tu reserva. Si contin??a, contacta con el administrador del sistema.';
		$strings['InvalidStartReminderTime'] = 'La hora de comienzo del recordatorio no es v??lida.';
		$strings['InvalidEndReminderTime'] = 'La hora de finalizaci??n del recordatorio no es v??lida.';
		$strings['QuotaExceeded'] = 'L??mite de cuota excedido.';
		$strings['MultiDayRule'] = '%s no permite reservar a trav??s de d??as.';
		$strings['InvalidReservationData'] = 'Hubo problemas con tu solicitud de reserva.';
		$strings['PasswordError'] = 'La contrase??a debe contener al menos %s letras y al menos %s n??meros.';
		$strings['PasswordErrorRequirements'] = 'La contrase??a debe contener una combinaci??n de al menos %s letras may??sculas y min??sculas y %s n??meros.';
		$strings['NoReservationAccess'] = 'No tienes permisos para cambiar esta reserva.';
		$strings['PasswordControlledExternallyError'] = 'La contrase??a se controla con un sistema externo y no se puede actualizar desde aqu??.';
		$strings['AccessoryResourceRequiredErrorMessage'] = 'El accesorio %s solamente puede reservarse con los recursos %s';
		$strings['AccessoryMinQuantityErrorMessage'] = 'Debes reservar al menos %s del accesorio %s';
		$strings['AccessoryMaxQuantityErrorMessage'] = 'No puedes reservar m??s de %s del accesorio %s';
		$strings['AccessoryResourceAssociationErrorMessage'] = 'El accesorio \'%s\' no puede reservarse con los recursos solicitados';
		$strings['NoResources'] = 'No has agregado ning??n recurso.';
		$strings['ParticipationNotAllowed'] = 'No tienes permiso para unirte a esta reserva.';
		$strings['ReservationCannotBeCheckedInTo'] = 'No se puede hacer ??check in?? en esta reserva.';
		$strings['ReservationCannotBeCheckedOutFrom'] = 'No se puede hacer ??check out?? en esta reserva.';

		// End Errors

		// Page Titles
		$strings['CreateReservation'] = 'Crear reserva';
		$strings['EditReservation'] = 'Editar reserva';
		$strings['LogIn'] = 'Iniciar sesi??n';
		$strings['ManageReservations'] = 'Gestionar reservas';
		$strings['AwaitingActivation'] = 'Esperando activaci??n';
		$strings['PendingApproval'] = 'Pendiente de aprobaci??n';
		$strings['ManageSchedules'] = 'Planificaciones';
		$strings['ManageResources'] = 'Recursos';
		$strings['ManageAccessories'] = 'Accesorios';
		$strings['ManageUsers'] = 'Usuarios';
		$strings['ManageGroups'] = 'Grupos';
		$strings['ManageQuotas'] = 'Cuotas';
		$strings['ManageBlackouts'] = 'Agenda de no disponibilidad';
		$strings['MyDashboard'] = 'Mi tabl??n';
		$strings['ServerSettings'] = 'Ajustes de servidor';
		$strings['Dashboard'] = 'Tabl??n';
		$strings['Help'] = 'Ayuda';
		$strings['Administration'] = 'Administraci??n';
		$strings['About'] = 'Acerca de';
		$strings['Bookings'] = 'Reservas';
		$strings['Schedule'] = 'Planificaci??n';
		$strings['Reservations'] = 'Reservas';
		$strings['Account'] = 'Cuenta';
		$strings['EditProfile'] = 'Editar mi perfil';
		$strings['FindAnOpening'] = 'Encontrar un hueco';
		$strings['OpenInvitations'] = 'Invitaciones pendientes';
		$strings['MyCalendar'] = 'Mi calendario';
		$strings['ResourceCalendar'] = 'Calendario de recursos';
		$strings['Reservation'] = 'Nueva reserva';
		$strings['Install'] = 'Instalaci??n';
		$strings['ChangePassword'] = 'Cambiar contrase??a';
		$strings['MyAccount'] = 'Mi cuenta';
		$strings['Profile'] = 'Perfil';
		$strings['ApplicationManagement'] = 'Gesti??n de la aplicaci??n';
		$strings['ForgotPassword'] = 'Contrase??a olvidada';
		$strings['NotificationPreferences'] = 'Preferencias de notificaci??n';
		$strings['ManageAnnouncements'] = 'Anuncios';
		$strings['Responsibilities'] = 'Responsabilidades';
		$strings['GroupReservations'] = 'Reservas del grupo';
		$strings['ResourceReservations'] = 'Reservas de recursos';
		$strings['Customization'] = 'Personalizaci??n';
		$strings['Attributes'] = 'Atributos';
		$strings['AccountActivation'] = 'Activaci??n de cuenta';
		$strings['ScheduleReservations'] = 'Programar reservas';
		$strings['Reports'] = 'Informes';
		$strings['GenerateReport'] = 'Crear nuevo informe';
		$strings['MySavedReports'] = 'Mis informes guardados';
		$strings['CommonReports'] = 'Informes comunes';
		$strings['ViewDay'] = 'Ver d??a';
		$strings['Group'] = 'Grupo';
		$strings['ManageConfiguration'] = 'Configuraci??n de la aplicaci??n';
		$strings['LookAndFeel'] = 'Apariencia';
		$strings['ManageResourceGroups'] = 'Grupos de recursos';
		$strings['ManageResourceTypes'] = 'Tipos de recursos';
		$strings['ManageResourceStatus'] = 'Estados de recursos';
		$strings['ReservationColors'] = 'Colores de las reservas';
		// End Page Titles

		// Day representations
		$strings['DaySundaySingle'] = 'D';
		$strings['DayMondaySingle'] = 'L';
		$strings['DayTuesdaySingle'] = 'M';
		$strings['DayWednesdaySingle'] = 'X';
		$strings['DayThursdaySingle'] = 'J';
		$strings['DayFridaySingle'] = 'V';
		$strings['DaySaturdaySingle'] = 'S';

		$strings['DaySundayAbbr'] = 'Dom';
		$strings['DayMondayAbbr'] = 'Lun';
		$strings['DayTuesdayAbbr'] = 'Mar';
		$strings['DayWednesdayAbbr'] = 'Mi??';
		$strings['DayThursdayAbbr'] = 'Jue';
		$strings['DayFridayAbbr'] = 'Vie';
		$strings['DaySaturdayAbbr'] = 'S??b';
		// End Day representations

		// Email Subjects
		$strings['ReservationApprovedSubject'] = 'Se ha aprobado tu reserva';
		$strings['ReservationCreatedSubject'] = 'Se ha creado tu reserva';
		$strings['ReservationUpdatedSubject'] = 'Se ha actualizado tu reserva';
		$strings['ReservationDeletedSubject'] = 'Se ha eliminado tu reserva';
		$strings['ReservationCreatedAdminSubject'] = 'Notificaci??n: se ha creado una reserva';
		$strings['ReservationUpdatedAdminSubject'] = 'Notificaci??n: se ha actualizado una reserva';
		$strings['ReservationDeleteAdminSubject'] = 'Notificaci??n: se ha eliminado una reserva';
		$strings['ReservationApprovalAdminSubject'] = 'Notificaci??n: una reserva necesita aprobaci??n';
		$strings['ParticipantAddedSubject'] = 'Notificaci??n de participaci??n en reserva';
		$strings['ParticipantDeletedSubject'] = 'Eliminaci??n de participaci??n en reserva';
		$strings['InviteeAddedSubject'] = 'Invitaci??n a reserva';
		$strings['ResetPassword'] = 'Petici??n de reinicio de contrase??a';
		$strings['ActivateYourAccount'] = 'Por favor, activa tu cuenta';
		$strings['ReportSubject'] = 'El informe solicitado (%s)';
		$strings['ReservationStartingSoonSubject'] = 'La reserva de %s comienza pronto';
		$strings['ReservationEndingSoonSubject'] = 'La reserva de %s finaliza pronto';
		$strings['UserAdded'] = 'Se ha agregado un nuevo usuario';
		$strings['UserDeleted'] = 'La cuenta de usuario de %s fue borrada por %s';
		$strings['GuestAccountCreatedSubject'] = 'Detalles de la cuenta';
		// End Email Subjects
		
				
		$this->Strings = $strings;
    }

    protected function _LoadDays()
    {
		$days = parent::_LoadDays();

		/***
		DAY NAMES
		All of these arrays MUST start with Sunday as the first element
		and go through the seven day week, ending on Saturday
		 ***/
		// The full day name
		$days['full'] = array('Domingo', 'Lunes', 'Martes', 'Mi??rcoles', 'Jueves', 'Viernes', 'S??bado');
		// The three letter abbreviation
		$days['abbr'] = array('Dom', 'Lun', 'Mar', 'Mi??', 'Jue', 'Vie', 'S??b');
		// The two letter abbreviation
		$days['two'] = array('Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa');
		// The one letter abbreviation
		$days['letter'] = array('D', 'L', 'M', 'X', 'J', 'V', 'S');

		$this->Days = $days;
    }

    protected function _LoadMonths()
    {
		$months = parent::_LoadMonths();

		/***
		MONTH NAMES
		All of these arrays MUST start with January as the first element
		and go through the twelve months of the year, ending on December
		 ***/
		// The full month name
		$months['full'] = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
		// The three letter month name
		$months['abbr'] = array('Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic');

		$this->Months = $months;
    }

    protected function _LoadLetters()
    {
		$this->Letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', '??', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    }

    protected function _GetHtmlLangCode()
    {
		return 'es';
    }
}

