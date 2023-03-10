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
require_once('en_gb.php');

class no_no extends en_us

{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * @return array
	 */
	protected function _LoadDates()
	{
		$dates = parent::_LoadDates();

		$dates['general_date'] = 'm/d/Y';
		$dates['general_datetime'] = 'm/d/Y H:i:s';
		$dates['schedule_daily'] = 'l, m/d/Y';
		$dates['reservation_email'] = 'm/d/Y @ g:i A (e)';
		$dates['res_popup'] = 'm/d/Y g:i A';
		$dates['dashboard'] = 'l, m/d/Y g:i A';
		$dates['period_time'] = 'g:i A';
		$dates['general_date_js'] = 'mm/dd/yy';
		$dates['calendar_time'] = 'h:mmt';
		$dates['calendar_dates'] = 'M/d';

		$this->Dates = $dates;

		return $this->Dates;
	}

	/**
	 * @return array
	 */
	protected function _LoadStrings()
	{
		$strings = parent::_LoadStrings();

		$strings['FirstName'] = 'Fornavn';
		$strings['LastName'] = 'Etternavn';
		$strings['Timezone'] = 'Tidssone';
		$strings['Edit'] = 'Rediger';
		$strings['Change'] = 'Endre';
		$strings['Rename'] = 'Gi nytt navn';
		$strings['Remove'] = 'Fjern';
		$strings['Delete'] = 'Slett';
		$strings['Update'] = 'Oppdater';
		$strings['Cancel'] = 'Avbryt';
		$strings['Add'] = 'Legg til';
		$strings['Name'] = 'Navn';
		$strings['Yes'] = 'Ja';
		$strings['No'] = 'Nei';
		$strings['FirstNameRequired'] = 'Fornavn er obligatorisk.';
		$strings['LastNameRequired'] = 'Etternavn er obligatorisk.';
		$strings['PwMustMatch'] = 'Passordbekreftelsen m?? matche oppgitt passord.';
		$strings['ValidEmailRequired'] = 'En gyldig epostaddresse er p??krevd.';
		$strings['UniqueEmailRequired'] = 'Denne epostaddressen finnes allerede i registeret.';
		$strings['UniqueUsernameRequired'] = 'Brukernavnet er opptatt.';
		$strings['UserNameRequired'] = 'User name is required.';
		$strings['CaptchaMustMatch'] = 'Vennligst angi tegnene fra sikkerhetsbildet eksakt som angitt.';
		$strings['Today'] = 'I dag';
		$strings['Week'] = 'Uke';
		$strings['Month'] = 'M??ned';
		$strings['BackToCalendar'] = 'Tilbake til kalender';
		$strings['BeginDate'] = 'Start';
		$strings['EndDate'] = 'Slutt';
		$strings['Username'] = 'Brukernavn';
		$strings['Password'] = 'Passord';
		$strings['PasswordConfirmation'] = 'Bekreft passord';
		$strings['DefaultPage'] = 'Standardsiden';
		$strings['MyCalendar'] = 'Min kalender';
		$strings['ScheduleCalendar'] = 'Bookingkalender';
		$strings['Registration'] = 'Registrering';
		$strings['NoAnnouncements'] = 'Det er ingen kunngj??ringer';
		$strings['Announcements'] = 'Kunngj??ringer';
		$strings['NoUpcomingReservations'] = 'Du har ingen kommende reservasjoner';
		$strings['UpcomingReservations'] = 'Kommende reservasjoner';
		$strings['AllNoUpcomingReservations'] = 'Det finnes ingen kommnde reservasjoner';
		$strings['AllUpcomingReservations'] = 'Alle kommende reservasjoner';
		$strings['ShowHide'] = 'Vis/Skjul';
		$strings['Error'] = 'Feil';
		$strings['ReturnToPreviousPage'] = 'Tilbake til forrige side';
		$strings['UnknownError'] = 'Ukjent feil';
		$strings['InsufficientPermissionsError'] = 'Du har ikke tilgangsrettigheter til dette objektet';  //usikker p?? oversettelse resource
		$strings['MissingReservationResourceError'] = 'Leieobjekt ikke valgt';
		$strings['MissingReservationScheduleError'] = 'Bookingkalender ikke valgt';
		$strings['DoesNotRepeat'] = 'Repeteres ikke';
		$strings['Daily'] = 'Daglig';
		$strings['Weekly'] = 'Ukentlig';
		$strings['Monthly'] = 'M??nedlig';
		$strings['Yearly'] = '??rlig';
		$strings['RepeatPrompt'] = 'Repeter';
		$strings['hours'] = 'timer';
		$strings['days'] = 'dager';
		$strings['weeks'] = 'uker';
		$strings['months'] = 'm??neder';
		$strings['years'] = '??r';
		$strings['day'] = 'dag';
		$strings['week'] = 'uke';
		$strings['month'] = 'm??ned';
		$strings['year'] = '??r';
		$strings['repeatDayOfMonth'] = 'dag i m??ned';
		$strings['repeatDayOfWeek'] = 'dag i uke';
		$strings['RepeatUntilPrompt'] = 'Frem til';
		$strings['RepeatEveryPrompt'] = 'Hver';
		$strings['RepeatDaysPrompt'] = 'P??';
		$strings['CreateReservationHeading'] = 'Opprett en ny reservasjon';
		$strings['EditReservationHeading'] = 'Redigerer reservasjonen %s';
		$strings['ViewReservationHeading'] = 'Viser reservation %s';
		$strings['ReservationErrors'] = 'Endre Reservasjon';
		$strings['Create'] = 'Opprett';
		$strings['ThisInstance'] = 'Kun denne enheten';
		$strings['AllInstances'] = 'Alle enheter';
		$strings['FutureInstances'] = 'Fremtidige enheter';
		$strings['Print'] = 'Skriv ut';
		$strings['ShowHideNavigation'] = 'Vis/Skjul navigasjon';
		$strings['ReferenceNumber'] = 'Referansenummer';
		$strings['Tomorrow'] = 'I morgen';
		$strings['LaterThisWeek'] = 'Senere denne uken';
		$strings['NextWeek'] = 'Neste uke';
		$strings['SignOut'] = 'Logg ut';                                                //usikker oversettelse
		$strings['LayoutDescription'] = 'Starter p?? %s, viser %s dager om gangen';
		$strings['AllResources'] = 'Alle ressurser';
		$strings['TakeOffline'] = 'Deaktiver nettvisning';
		$strings['BringOnline'] = 'Aktiver nettvisning';
		$strings['AddImage'] = 'Legg til bilde';
		$strings['NoImage'] = 'Ingen bilde valgt';
		$strings['Move'] = 'Flytt';
		$strings['AppearsOn'] = 'Opptrer p?? %s';
		$strings['Location'] = 'Stedsangivelse';
		$strings['NoLocationLabel'] = '(ingen stedsangivelse oppgitt)';
		$strings['Contact'] = 'Kontakt';
		$strings['NoContactLabel'] = '(ingen kontaktinformasjon)';
		$strings['Description'] = 'Beskrivelse';
		$strings['NoDescriptionLabel'] = '(ingen beskrivelse)';
		$strings['Notes'] = 'Anmerkninger';
		$strings['NoNotesLabel'] = '(ingen anmerkninger)';
		$strings['NoTitleLabel'] = '(ingen tittel)';
		$strings['UsageConfiguration'] = 'Konfigurasjon bruk';                    //usikker oversettelse
		$strings['ChangeConfiguration'] = 'Endre konfigurasjon';
		$strings['ResourceMinLength'] = 'Reservasjonen m?? ha en varighet p?? minst %s';
		$strings['ResourceMinLengthNone'] = 'Det er ingen minimum reservasjonstid';
		$strings['ResourceMaxLength'] = 'Reservasjonen kan ikke vare lengre enn %s';
		$strings['ResourceMaxLengthNone'] = 'Det er ingen maksimum reservasjonstid';
		$strings['ResourceRequiresApproval'] = 'Reservasjoner m?? godkjennes';
		$strings['ResourceRequiresApprovalNone'] = 'Reservasjoner trenger ikke godkjennes';
		$strings['ResourcePermissionAutoGranted'] = 'Godkjennes automatisk';
		$strings['ResourcePermissionNotAutoGranted'] = 'Godkjennes ikke automatisk';
		$strings['ResourceMinNotice'] = 'Reservasjoner m?? gj??res minst %s f??r starttid';
		$strings['ResourceMinNoticeNone'] = 'Reservasjoner kan gj??res fram til n??v??rende tidspunkt';
		$strings['ResourceMaxNotice'] = 'Reservasjoner kan ikke ha endetidspunkt n??rmere enn %s fra n??v??rende tidspunkt';
		$strings['ResourceMaxNoticeNone'] = 'Ingen grense for sluttidspunkt';
		$strings['ResourceBufferTime'] = 'Det m?? v??re %s mellom reservasjoner';
		$strings['ResourceBufferTimeNone'] = 'Det er ingen buffer mellom reservasjoner';
		$strings['ResourceAllowMultiDay'] = 'Reservasjoner kan gj??res over flere dager';
		$strings['ResourceNotAllowMultiDay'] = 'Reservasjoner kan ikke gj??res over flere dager';
		$strings['ResourceCapacity'] = 'Denne enhet har en kapasitet p?? %s person(er)';
		$strings['ResourceCapacityNone'] = 'Denne enhet har ubegrenset kapasitet';
		$strings['AddNewResource'] = 'Legg til ny enhet';
		$strings['AddNewUser'] = 'Legg til ny bruker';
		$strings['AddUser'] = 'Legg til bruker';
		$strings['Schedule'] = 'Bookingkalender';
		$strings['AddResource'] = 'Legg til enhet';
		$strings['Capacity'] = 'Kapasitet';
		$strings['Access'] = 'Tilgang';
		$strings['Duration'] = 'Varighet';
		$strings['Active'] = 'Aktivert';
		$strings['Inactive'] = 'Deaktivert';
		$strings['ResetPassword'] = 'Tilbakestill passord';
		$strings['LastLogin'] = 'Siste innlogging';
		$strings['Search'] = 'S??k';
		$strings['ResourcePermissions'] = 'Tilgangsrettigheter enhet';
		$strings['Reservations'] = 'Reservasjoner';
		$strings['Groups'] = 'Grupper';
		$strings['ResetPassword'] = 'Tilbakestill passord';
		$strings['AllUsers'] = 'Alle brukere';
		$strings['AllGroups'] = 'Alle grupper';
		$strings['AllSchedules'] = 'Alle bookingkalendere';
		$strings['UsernameOrEmail'] = 'Brukernavn eller epost';
		$strings['Members'] = 'Medlemmer';
		$strings['QuickSlotCreation'] = 'Create slots every %s minutes between %s and %s';
		$strings['ApplyUpdatesTo'] = 'Gjennomf??r oppdatering p??';
		$strings['CancelParticipation'] = 'Avbryt deltakelse';
		$strings['Attending'] = 'Deltar';
		$strings['QuotaConfiguration'] = 'P?? %s for %s brukere i %s er begrenset til %s %s pr %s';
		$strings['reservations'] = 'reservasjoner';
		$strings['reservation'] = 'reservasjon';
		$strings['ChangeCalendar'] = 'Bytt kalender';
		$strings['AddQuota'] = 'Legg til kvote';
		$strings['FindUser'] = 'Finn bruker';
		$strings['Created'] = 'Opprettet';
		$strings['LastModified'] = 'Sist endret';
		$strings['GroupName'] = 'Gruppenavn';
		$strings['GroupMembers'] = 'Gruppemedlemmer';
		$strings['GroupRoles'] = 'Grupperoller';
		$strings['GroupAdmin'] = 'Gruppeadministrator';
		$strings['Actions'] = 'Handlinger';
		$strings['CurrentPassword'] = 'N??v??rende passord';
		$strings['NewPassword'] = 'Nytt passord';
		$strings['InvalidPassword'] = 'N??v??rende passord er feil';
		$strings['PasswordChangedSuccessfully'] = 'Passordet er endret';
		$strings['SignedInAs'] = 'Logget inn som';
		$strings['NotSignedIn'] = 'Du er ikke innlogget';
		$strings['ReservationTitle'] = 'Reservasjonstittel';
		$strings['ReservationDescription'] = 'Reservasjonsbeskrivelse';
		$strings['ResourceList'] = 'Enheter til reservasjon';
		$strings['Accessories'] = 'Tilbeh??r';
		$strings['ParticipantList'] = 'Deltakere';
		$strings['InvitationList'] = 'Invitasjonsliste';
		$strings['AccessoryName'] = 'Navn tilbeh??r';
		$strings['QuantityAvailable'] = 'Tilgjengelig antall';
		$strings['Resources'] = 'Enheter';
		$strings['Participants'] = 'Deltakere';
		$strings['User'] = 'Bruker';
		$strings['Resource'] = 'Enhet';
		$strings['Status'] = 'Status';
		$strings['Approve'] = 'Godkjenn';
		$strings['Page'] = 'Side';
		$strings['Rows'] = 'Rader';
		$strings['Unlimited'] = 'Ubegrenset';
		$strings['Email'] = 'Epost';
		$strings['EmailAddress'] = 'Epostaddresse';
		$strings['Phone'] = 'Telefon';
		$strings['Organization'] = 'Gateaddresse';
		$strings['Position'] = 'Sted';
		$strings['Language'] = 'Spr??k';
		$strings['Permissions'] = 'Tilgangsrettigheter';
		$strings['Reset'] = 'Tilbakestill';
		$strings['FindGroup'] = 'Finn gruppe';
		$strings['Manage'] = 'Administrer';
		$strings['None'] = 'Ingen';
		$strings['AddToOutlook'] = 'Legg til outlookkalender';
		$strings['Done'] = 'Ferdig';
		$strings['RememberMe'] = 'Husk meg';
		$strings['FirstTimeUser?'] = 'F??rstegangsbruker?';
		$strings['CreateAnAccount'] = 'Opprett en brukerprofil';
		$strings['ViewSchedule'] = 'Vis bookingkalender';
		$strings['ForgotMyPassword'] = 'Jeg har glemt mitt passord';
		$strings['YouWillBeEmailedANewPassword'] = 'Du vil f?? et autogenerert passord p?? epost';
		$strings['Close'] = 'Lukk';
		$strings['ExportToCSV'] = 'Eksporter til CSV';
		$strings['OK'] = 'OK';
		$strings['Working'] = 'arbeider...';
		$strings['Login'] = 'Logg inn';
		$strings['AdditionalInformation'] = 'Tilleggsinformasjon';
		$strings['AllFieldsAreRequired'] = 'alle felter er obligatorisk';
		$strings['Optional'] = 'valgfritt';
		$strings['YourProfileWasUpdated'] = 'Profilen din ble oppdatert';
		$strings['YourSettingsWereUpdated'] = 'Dine innstillinger ble oppdatert';
		$strings['Register'] = 'Registerer deg';
		$strings['SecurityCode'] = 'Sikkerhetskode';
		$strings['ReservationCreatedPreference'] = 'N??r jeg oppretter en reservasjon, eller en reservasjon blir opprettet p?? mine vegne';
		$strings['ReservationUpdatedPreference'] = 'N??r jeg oppdaterer en reservasjon, eller en reservasjon blir oppdatert p?? mine vegne';
		$strings['ReservationDeletedPreference'] = 'N??r jeg sletter en reservasjon, eller en reservasjon blir slettet p?? mine vegne';
		$strings['ReservationApprovalPreference'] = 'N??r min ventende reservasjon blir godkjent';
		$strings['PreferenceSendEmail'] = 'Send meg en epost';
		$strings['PreferenceNoEmail'] = 'Ikke gi meg tilbakemelding';
		$strings['ReservationCreated'] = 'Din reservasjon er opprettet!';
		$strings['ReservationUpdated'] = 'Din reservasjon er oppdatert!';
		$strings['ReservationRemoved'] = 'Din reservasjon ble fjernet';
		$strings['ReservationRequiresApproval'] = 'En eller flere av enhetsreservasjonene trenger godkjenning f??r den er gjeldende.  Denne        reservasjonen   er kun midlertidig fram til den er godkjent.';
		$strings['YourReferenceNumber'] = 'Ditt referansenummer er %s';
		$strings['UpdatingReservation'] = 'Oppdaterer reservasjonen';
		$strings['ChangeUser'] = 'Bytt bruker';
		$strings['MoreResources'] = 'Flere enheter';
		$strings['ReservationLength'] = 'Reservasjonslengde';
		$strings['ParticipantList'] = 'Deltakerliste';
		$strings['AddParticipants'] = 'Legg til deltakere';
		$strings['InviteOthers'] = 'Inviter andre';
		$strings['AddResources'] = 'Legg til enheter';
		$strings['AddAccessories'] = 'Legg til tilbeh??r';
		$strings['Accessory'] = 'Tilbeh??r';
		$strings['QuantityRequested'] = 'Antall anmodet';
		$strings['CreatingReservation'] = 'Oppretter reservasjon';
		$strings['UpdatingReservation'] = 'Oppdaterer reservasjon';
		$strings['DeleteWarning'] = 'Denne handlingen er permanent og kan ikke angres!';
		$strings['DeleteAccessoryWarning'] = 'Sletting av dette tilbeh??ret vil fjerne det fra alle reservasjoner.';
		$strings['AddAccessory'] = 'Legg til tilbeh??r';
		$strings['AddBlackout'] = 'Legg til utilgjengelighet';
		$strings['AllResourcesOn'] = 'Alle enheter vises';
		$strings['Reason'] = '??rsak';
		$strings['BlackoutShowMe'] = 'Vis reservasjoner i konflikt';
		$strings['BlackoutDeleteConflicts'] = 'Slett reservasjoner i konflikt';
		$strings['Filter'] = 'Filter';
		$strings['Between'] = 'Mellom';
		$strings['CreatedBy'] = 'Opprettet av';
		$strings['BlackoutCreated'] = 'Utilgjengelighet opprettet';
		$strings['BlackoutNotCreated'] = 'Utilgjengelighet kunne ikke opprettes';
		$strings['BlackoutUpdated'] = 'Utilgjengelighet oppdatert';
		$strings['BlackoutNotUpdated'] = 'Utilgjengelighet kunne ikke oppdateres';
		$strings['BlackoutConflicts'] = 'Det er konflikt mellom utilgjengelighetstider';
		$strings['ReservationConflicts'] = 'Det er konflikt mellom reservasjonstider';
		$strings['UsersInGroup'] = 'Brukere i denne gruppen';
		$strings['Browse'] = 'Se(browse)';
		$strings['DeleteGroupWarning'] = 'Ved ?? slette denne gruppen fjernes alle tilknyttede enhetsrettigheter.  Brukerne kan miste tilgang til enhetene.';
		$strings['WhatRolesApplyToThisGroup'] = 'Hvilke roller gjelder for denne gruppen?';
		$strings['WhoCanManageThisGroup'] = 'Hvem kan administrere denne gruppen?';
		$strings['WhoCanManageThisSchedule'] = 'Hvem kan administrere denne bookingkalenderen?';
		$strings['AddGroup'] = 'Legg til gruppe';
		$strings['AllQuotas'] = 'Alle kvoter';
		$strings['QuotaReminder'] = 'Husk: Kvotene er styrt av\'s tidssone.';
		$strings['AllReservations'] = 'Alle reservasjoner';
		$strings['PendingReservations'] = 'Reservasjoner som avventer godkjenning';
		$strings['Approving'] = 'Godkjenner';
		$strings['MoveToSchedule'] = 'Flytt til bookingkalender';
		$strings['DeleteResourceWarning'] = 'Sletting av denne enheten vil ogs?? slette tilh??rende data, inkludert';
		$strings['DeleteResourceWarningReservations'] = 'alle foreg??ende, n??v??rende og fremtidige reservasjoner assosiert med den';
		$strings['DeleteResourceWarningPermissions'] = 'alle tilknyttede rettigheter';
		$strings['DeleteResourceWarningReassign'] = 'Vennligst tilkntee p?? nytt alt du ikke vil skal slettes f??r du fortsetter';
		$strings['ScheduleLayout'] = 'Utforming (alle tider %s)';
		$strings['ReservableTimeSlots'] = 'Reserverbare tidsperioder';
		$strings['BlockedTimeSlots'] = 'Blokkerte tidsperioder';
		$strings['ThisIsTheDefaultSchedule'] = 'Dette er standard bookingkalender';
		$strings['DefaultScheduleCannotBeDeleted'] = 'Standard bookingkalender kan ikke slettes';
		$strings['MakeDefault'] = 'Gj??r til standard';
		$strings['BringDown'] = 'Flytt ned';
		$strings['ChangeLayout'] = 'Forandre utformingen';
		$strings['AddSchedule'] = 'Legg til bookingkalender';
		$strings['StartsOn'] = 'Starter p??';
		$strings['NumberOfDaysVisible'] = 'Antall dager synlig';
		$strings['UseSameLayoutAs'] = 'Bruk samme utforming som';
		$strings['Format'] = 'Format';
		$strings['OptionalLabel'] = 'Valgfri merkelapp';
		$strings['LayoutInstructions'] = 'Legg til en periode pr linje.  Periode m?? angis for alle 24 timer med begynnelse og slutt 12:00.';
		$strings['AddUser'] = 'Legg til bruker';
		$strings['UserPermissionInfo'] = 'Faktisk tilgang til enhet kan variere basert p?? brukerrolle, gruppetilgangsrettigheter, eller       innstillingene for eksterne tilgangsrettigheter';
		$strings['DeleteUserWarning'] = 'Ved ?? slette denne brukeren, fjerner du ogs?? alle hans foreg??ende, n??v??rende og fremtidige reservasjoner.';
		$strings['AddAnnouncement'] = 'Legg til kunngj??ring';
		$strings['Announcement'] = 'Kunngj??ring';
		$strings['Priority'] = 'Prioritet';
		$strings['Reservable'] = 'Reserverbar';
		$strings['Unreservable'] = 'Ikke reserverbar';
		$strings['Reserved'] = 'Reservert';
		$strings['MyReservation'] = 'Min reservasjon';
		$strings['Pending'] = 'venter';                                                       //pending? se bruk f??r endelig oversettelse
		$strings['Past'] = 'Foreg??ende';
		$strings['Restricted'] = 'Begrenset';                                                    //restricted?? se bruk f??r endelig oversettelse
		$strings['ViewAll'] = 'View All';
		$strings['MoveResourcesAndReservations'] = 'Flytt enheter og reservasjoner til';
		$strings['TurnOffSubscription'] = 'Sl?? av kalenderabbonement';
		$strings['TurnOnSubscription'] = 'Sl?? p?? kalenderabbonement';
		$strings['SubscribeToCalendar'] = 'Abboner p?? denne kalenderen';
		$strings['SubscriptionsAreDisabled'] = 'Administrator har fjernet muligheten til kalenderabbonering';
		$strings['NoResourceAdministratorLabel'] = '(Ingen enhetsadministrator)';
		$strings['WhoCanManageThisResource'] = 'Hvem kan administere denne enheten?';
		$strings['ResourceAdministrator'] = 'Enhetsadministrator';
		$strings['Private'] = 'Privat';
		$strings['Accept'] = 'Godta';
		$strings['Decline'] = 'Avsl??';
		$strings['ShowFullWeek'] = 'Vis hele uken';
		$strings['CustomAttributes'] = 'Valgfrie attributter';
		$strings['AddAttribute'] = 'Legg til en attributt';
		$strings['EditAttribute'] = 'Oppdater en attributt';
		$strings['DisplayLabel'] = 'Vis merkelapp';
		$strings['Type'] = 'Type';
		$strings['Required'] = 'Obligatorisk';
		$strings['ValidationExpression'] = 'Godkjenningsuttrykk';
		$strings['PossibleValues'] = 'Mulige verdier';
		$strings['SingleLineTextbox'] = 'Enlinjes tekstboks';
		$strings['MultiLineTextbox'] = 'Flerlinjes tekstboks';
		$strings['Checkbox'] = 'Avkryssingsboks';
		$strings['SelectList'] = 'Listevalg';
		$strings['CommaSeparated'] = 'kommaseparert';
		$strings['Category'] = 'Kategori';
		$strings['CategoryReservation'] = 'Reservasjon';
		$strings['CategoryGroup'] = 'Gruppe';
		$strings['SortOrder'] = 'Sorteringsrekkef??lge';
		$strings['Title'] = 'Tittel';
		$strings['AdditionalAttributes'] = 'Tilvalgsattributter';
		$strings['True'] = 'P??';
		$strings['False'] = 'Av';
		$strings['ForgotPasswordEmailSent'] = 'En epost er sendt til oppgitt addresse med informasjon om tilbakestilling av passord';
		$strings['ActivationEmailSent'] = 'Du vil om kort tid motta en aktiverings-epost.';
		$strings['AccountActivationError'] = 'Beklager, vi kunne ikke aktivere din konto.';
		$strings['Attachments'] = 'Vedlegg';
		$strings['AttachFile'] = 'Legg ved fil';
		$strings['Maximum'] = 'max';
		$strings['NoScheduleAdministratorLabel'] = 'Ingen administrator for bookingkalender';
		$strings['ScheduleAdministrator'] = 'Administrator bookingkalender';
		$strings['Total'] = 'Total';
		$strings['QuantityReserved'] = 'Antall reservert';
		$strings['AllAccessories'] = 'Alt tilbeh??r';
		$strings['GetReport'] = 'Hent rapport';
		$strings['NoResultsFound'] = 'Ingen matchende resultater';
		$strings['SaveThisReport'] = 'Lagre denne rapporten';
		$strings['ReportSaved'] = 'Rapport lagret!';
		$strings['EmailReport'] = 'Send rapport p?? epost';
		$strings['ReportSent'] = 'Rapport sendt!';
		$strings['RunReport'] = 'Kj??r rapport';
		$strings['NoSavedReports'] = 'Du har ingen lagrede rapporter.';
		$strings['CurrentWeek'] = 'Denne uke';
		$strings['CurrentMonth'] = 'Denne m??ned';
		$strings['AllTime'] = 'All tid';
		$strings['FilterBy'] = 'Filtrer ved';
		$strings['Select'] = 'Velg';
		$strings['List'] = 'Liste';
		$strings['TotalTime'] = 'Total Tid';
		$strings['Count'] = 'regn ut';
		$strings['Usage'] = 'Bruk';
		$strings['AggregateBy'] = 'Legg til ved';                                                //????????
		$strings['Range'] = 'utvalgsst??rrelse';
		$strings['Choose'] = 'Velg';
		$strings['All'] = 'Alt';
		$strings['ViewAsChart'] = 'Vis som diagram';
		$strings['ReservedResources'] = 'Reserverte enheter';
		$strings['ReservedAccessories'] = 'Reservert tilbeh??r';
		$strings['ResourceUsageTimeBooked'] = 'Bruk av enheter - Tid booket';
		$strings['ResourceUsageReservationCount'] = 'Bruk av enheter - Antall reservasjoner';
		$strings['Top20UsersTimeBooked'] = 'Top 20 Brukere - Tid booket';
		$strings['Top20UsersReservationCount'] = 'Top 20 Brukere - Antall reservasjoner';
		$strings['ConfigurationUpdated'] = 'Konfigurasjonsfilen ble oppdatert';
                $strings['ConfigurationFileNotWritable'] = 'Konfigurasjonsfilen kan ikke skrives til. Vennligst kontroller tilgangsrettighetene p?? denne fila og pr??v igjen.';
		$strings['ConfigurationUpdateHelp'] = 'Vis til konfigurasjonsinnstillingene i <a target=_blank href=%s>Hjelpefil</a> for dokumentasjon p?? disse innstillingene.';
		$strings['GeneralConfigSettings'] = 'innstillinger';
		$strings['UseSameLayoutForAllDays'] = 'Bruk samme utforming for alle dager';
		$strings['LayoutVariesByDay'] = 'Utforming varierer dag for dag';
		$strings['ManageReminders'] = 'Administrer P??minnelser';
		$strings['ReminderUser'] = 'Bruker ID p??minnelser';
		$strings['ReminderMessage'] = 'P??minnelsesmelding';
		$strings['ReminderAddress'] = 'Addresser for p??minnelser';
		$strings['ReminderSendtime'] = 'Tid for utsending av p??minnelse';
		$strings['ReminderRefNumber'] = 'P??minnelse referansenummer';
		$strings['ReminderSendtimeDate'] = 'Dato for p??minnelse';
		$strings['ReminderSendtimeTime'] = 'Tid for p??minnelse (TT:MM)';
		$strings['ReminderSendtimeAMPM'] = 'AM / PM';
		$strings['AddReminder'] = 'Legg til p??minnelse';
		$strings['DeleteReminderWarning'] = 'Vil du virkelig slette p??minnelsen?';
		$strings['NoReminders'] = 'Du har ingen kommende p??minnelser.';
		$strings['Reminders'] = 'P??minnelser';
		$strings['SendReminder'] = 'Send p??minnelse';
		$strings['minutes'] = 'minutter';
		$strings['hours'] = 'timer';
		$strings['days'] = 'dager';
		$strings['ReminderBeforeStart'] = 'f??r starttid';
		$strings['ReminderBeforeEnd'] = 'f??r avslutning';
		$strings['Logo'] = 'Logo';
		$strings['CssFile'] = 'CSS Fil';
		$strings['ThemeUploadSuccess'] = 'Dine endringer er lagret. Last siden (F5) for ?? oppdatere siden.';
		$strings['MakeDefaultSchedule'] = 'Gj??r til min standardkalender';
		$strings['DefaultScheduleSet'] = 'Dette er n?? din standardkalender';
		$strings['FlipSchedule'] = 'Bytt utforming p?? bookingkalender';
		$strings['Next'] = 'Neste';
		$strings['Success'] = 'Suksess';
		$strings['Participant'] = 'Deltaker';
		$strings['ResourceFilter'] = 'Enhetsfilter';
		$strings['ResourceGroups'] = 'Enhetsgrupper';
		$strings['AddNewGroup'] = 'Legg til ny gruppe';
		$strings['Quit'] = 'Avslutt';
		$strings['AddGroup'] = 'Legg til gruppe';
		$strings['StandardScheduleDisplay'] = 'Bruk standard kalendervisning';
		$strings['TallScheduleDisplay'] = 'Bruk h??y kalendervisning';
		$strings['WideScheduleDisplay'] = 'Bruk utvidet kalendervisning';
		$strings['CondensedWeekScheduleDisplay'] = 'Bruk komprimert ukevisning';
		$strings['ResourceGroupHelp1'] = 'Dra og slipp enhetsgrupper for ?? omorganisere.';
		$strings['ResourceGroupHelp2'] = 'H??yreklikk et enhetsgruppenavn for flere valg.';
		$strings['ResourceGroupHelp3'] = 'Dra og slipp enheter for ?? legge dem til grupper.';
		$strings['ResourceGroupWarning'] = 'Om enhetsgrupper brukes, m?? hver enhet tilordnes minst en gruppe. Enheter som ikke er tilordnet en gruppe kan ikke reserveres.';
		$strings['ResourceType'] = 'Enhetstype';
		$strings['AppliesTo'] = 'Tilh??rer';
		$strings['UniquePerInstance'] = 'Unik pr instans';
		$strings['AddResourceType'] = 'Legg til enhetstype';
		$strings['NoResourceTypeLabel'] = '(ingen enhetstype satt)';
		$strings['ClearFilter'] = 'Rens filter';
		$strings['MinimumCapacity'] = 'Minimum kapasitet';
		$strings['Color'] = 'Farge';
		$strings['Available'] = 'Tilgjengelig';
		$strings['Unavailable'] = 'Ikke tilgjengelig';
		$strings['Hidden'] = 'Skjult';
		$strings['ResourceStatus'] = 'Enhetsstatus';
		$strings['CurrentStatus'] = 'N??v??rende status';
		$strings['AllReservationResources'] = 'Alle reserverbare enheter';
		$strings['File'] = 'Fil';
		$strings['BulkResourceUpdate'] = 'Multioppdatering av enheter';
		$strings['Unchanged'] = 'Uendret';
		$strings['Common'] = 'Vanlig';
		$strings['AdvancedFilter'] = 'Avansert Filter';
		$strings['AllParticipants'] = 'Alle deltakere';
		$strings['ResourceAvailability'] = 'Tilgjengelige enheter';
		$strings['UnavailableAllDay'] = 'Utilgjengelig hele dagen';
		$strings['AvailableUntil'] = 'Tilgjengelig fram til';
		$strings['AvailableBeginningAt'] = 'Tilgjengelig fra og med';
		// End Strings

		// Install
		$strings['InstallApplication'] = 'Installer Booked Scheduler (kun MySQL)';
		$strings['IncorrectInstallPassword'] = 'Beklager, feil passord.';
		$strings['SetInstallPassword'] = 'Du m?? opprette et innstallasjonspassord f??r du kan fortsette.';
		$strings['InstallPasswordInstructions'] = 'I %s vennligst sett %s til et passord som er tilfeldig og vanskelig ?? gjette, returner deretter til denne siden.<br/>Du kan bruke %s';
		$strings['NoUpgradeNeeded'] = 'Ingen oppdatering n??dvendig. Ved ?? kj??re en ny innstallasjon vil alle eksisterende data bli slettet og en ny kopi av Booked Scheduler vil bli innstallert!';
		$strings['ProvideInstallPassword'] = 'Vennligst angi ditt innstallasjonspassord.';
		$strings['InstallPasswordLocation'] = 'Dette finner du p?? %s i %s.';
		$strings['VerifyInstallSettings'] = 'Godkjenn f??lgende standardinnstillinger f??r du fortsetter. Eller du kan forandre dem i %s.';
		$strings['DatabaseName'] = 'Navn p?? database';
		$strings['DatabaseUser'] = 'Database Brukernavn';
		$strings['DatabaseHost'] = 'Database Vert';
		$strings['DatabaseCredentials'] = 'Du m?? angi opplysninger om en MySQL-bruker som har rettigheter til ?? opprette databaser. Om du ikke vet, kontakt administratoren for databaser. I mange tilfeller vil innstallasjon p?? rotniv?? fungere.';
		$strings['MySQLUser'] = 'MySQL-bruker';
		$strings['InstallOptionsWarning'] = 'F??lgende muligheter vil kanskje ikke virke i et vertsmilj??. Hvis du innstallerer p?? en vert, bruk MySQL-wizard verkt??yet for ?? fullf??re disse stegene.';
		$strings['CreateDatabase'] = 'Opprett databasen';
		$strings['CreateDatabaseUser'] = 'Opprett databasebrukeren';
		$strings['PopulateExampleData'] = 'Importer eksempeldata. Oppretter adminkonto: admin/passord og brukerkonto: bruker/passord';
		$strings['DataWipeWarning'] = 'Advarsel: Dette vil slette eksisterende data';
		$strings['RunInstallation'] = 'Kj??r innstallasjon';
		$strings['UpgradeNotice'] = 'Du oppgraderer fra versjon <b>%s</b> til versjon <b>%s</b>';
		$strings['RunUpgrade'] = 'Kj??r oppgradering';
		$strings['Executing'] = 'Gjennomf??rer';
		$strings['StatementFailed'] = 'Feilet. Detaljer:';
		$strings['SQLStatement'] = 'SQL Uttrykk:';
		$strings['ErrorCode'] = 'Feilkode:';
		$strings['ErrorText'] = 'Feilmelding:';
		$strings['InstallationSuccess'] = 'Installasjonen er gjennomf??rt!';
		$strings['RegisterAdminUser'] = 'Registrer til administratorbruker. Dette er p??krevet om du ikke importerte eksempeldata. Forsikre deg om at $conf[\'settings\'][\'allow.self.registration\'] = \'true\' er i %s filen.';
		$strings['LoginWithSampleAccounts'] = 'Hvis du importerte eksempeldata, kan du n?? logge deg inn med admin/password for adminbruker eller user/password for basisbruker.';
		$strings['InstalledVersion'] = 'Du kj??rer n?? versjon %s av Booked Scheduler';
		$strings['InstallUpgradeConfig'] = 'Det er anbefalt ?? oppgradere konfigurasjonsfilen';
		$strings['InstallationFailure'] = 'Det oppsto et problem med innstallasjonen.  Vennligst korriger og pr??v igjen.';
		$strings['ConfigureApplication'] = 'Konfigurer Booked Scheduler';
		$strings['ConfigUpdateSuccess'] = 'Konfigurasjonsfilen er n?? oppdatert!';
		$strings['ConfigUpdateFailure'] = 'Kunne ikke automatisk oppdatere konfigurasjonsfilen. Vennligst erstatt innholdet i filen config.php med f??lgende:';
		$strings['SelectUser'] = 'Velg bruker';
		// End Install

		// Errors
		$strings['LoginError'] = 'Brukernavn og/eller passord er feil';
		$strings['ReservationFailed'] = 'Din reservasjon kunne ikke opprettes';
		$strings['MinNoticeError'] = 'Denne reservasjonen krever forh??ndsbooking.  Kan tidligst reserveres %s.';
		$strings['MaxNoticeError'] = 'Reservasjonen kan ikke utf??res s?? langt frem i tid.  The latest date and time that can be reserved is %s.';
		$strings['MinDurationError'] = 'Reservasjonen m?? vare minst %s.';
		$strings['MaxDurationError'] = 'Reservasjonen kan ikke vare lengre enn %s.';
		$strings['ConflictingAccessoryDates'] = 'Det finnes ikke nok av f??lgende tilbeh??r:';
		$strings['NoResourcePermission'] = 'Du har ikke tilgangsrettigheter til en eller flere av de anmodede enheter.';
		$strings['ConflictingReservationDates'] = 'Det er konflikt i reservasjonene p?? f??lgende datoer:';
		$strings['StartDateBeforeEndDateRule'] = 'Starttid m?? v??re f??r sluttid.';
		$strings['StartIsInPast'] = 'Du m?? velge en starttid som ikke er passert.';
		$strings['EmailDisabled'] = 'Adiministrator har sl??tt av epostkunngj??ringer.';
		$strings['ValidLayoutRequired'] = 'Tidsperioder m?? angis for alle 24 timer, men begynnelse og slutt kl 12:00 AM.';
		$strings['CustomAttributeErrors'] = 'Det er problemer med de valgfrie attributtene du anga:';
		$strings['CustomAttributeRequired'] = '%s er et obligatorisk felt.';
		$strings['CustomAttributeInvalid'] = 'Angitt verdi for %s er ugyldig.';
		$strings['AttachmentLoadingError'] = 'Beklager, et problem oppsto under opplasting av filen.';
		$strings['InvalidAttachmentExtension'] = 'Du kan bare laste opp filer av type: %s';
		$strings['InvalidStartSlot'] = '??nsket starttidspunkt er ikke gyldig.';
		$strings['InvalidEndSlot'] = '??nsket sluttidspunkt er ikke gyldig.';
		$strings['MaxParticipantsError'] = '%s kan kun ha %s deltakere.';
		$strings['ReservationCriticalError'] = 'Det oppsto en kritisk feil under lagringen av din reservasjon. Kontakt administrator om problemet fortsetter.';
		$strings['InvalidStartReminderTime'] = 'Starttid for p??minnelse ikke gyldig.';
		$strings['InvalidEndReminderTime'] = 'Sluttid for p??minnelse ikke gyldig.';
		$strings['QuotaExceeded'] = 'Kvotegrensen overskredet.';
		$strings['MultiDayRule'] = '%s tillater ikke reservasjoner over flere dager.';
		$strings['InvalidReservationData'] = 'Det oppsto et problem med din anmodning om reservasjon.';
		$strings['PasswordError'] = 'Passordet m?? inneholde minst %s bokstaver og minst %s tall.';
		$strings['PasswordErrorRequirements'] = 'Passordet m?? inneholde en kombinasjon av minst %s store og sm?? bokstaver og %s tall.';
		$strings['NoReservationAccess'] = 'Du har ikke tilgangsrettigheter til ?? endre denne reservasjonen.';
		$strings['PasswordControlledExternallyError'] = 'Passordet ditt er kontrollert av et eksternt system og kan ikke forandres her.';
		$strings['NoResources'] = 'Du har ikke lagt til noen enheter.';
		// End Errors

		// Page Titles
		$strings['CreateReservation'] = 'Opprett reservasjon';
		$strings['EditReservation'] = 'Redigere reservasjon';
		$strings['LogIn'] = 'Logg inn';
		$strings['ManageReservations'] = 'Reservasjoner';
		$strings['AwaitingActivation'] = 'Avventer aktivering';
		$strings['PendingApproval'] = 'Avventer godkjenning';
		$strings['ManageSchedules'] = 'Bookingkalendere';
		$strings['ManageResources'] = 'Enheter';
		$strings['ManageAccessories'] = 'Tilbeh??r';
		$strings['ManageUsers'] = 'Brukere';
		$strings['ManageGroups'] = 'Grupper';
		$strings['ManageQuotas'] = 'Kvoter';
		$strings['ManageBlackouts'] = 'Utilgjengelighet';
		$strings['MyDashboard'] = 'Mitt dashbord';
		$strings['ServerSettings'] = 'Serverinnstillinger';
		$strings['Dashboard'] = 'Dashbord';
		$strings['Help'] = 'Hjelp';
		$strings['Administration'] = 'Administrasjon';
		$strings['About'] = 'Om';
		$strings['Bookings'] = 'Bookinger';
		$strings['Schedule'] = 'Bookingkalender';
		$strings['Reservations'] = 'Reservasjoner';
		$strings['Account'] = 'Konto';
		$strings['EditProfile'] = 'Endre min profil';
		$strings['FindAnOpening'] = 'Finn et leietidspunkt';
		$strings['OpenInvitations'] = '??pne invitasjoner';
		$strings['MyCalendar'] = 'Min kalender';
		$strings['ResourceCalendar'] = 'Enhetskalender';
		$strings['Reservation'] = 'Ny reservasjon';
		$strings['Install'] = 'Installasjon';
		$strings['ChangePassword'] = 'Endre passord';
		$strings['MyAccount'] = 'Min konto';
		$strings['Profile'] = 'Profil';
		$strings['ApplicationManagement'] = 'Programstyring';
		$strings['ForgotPassword'] = 'Glemt passord';
		$strings['NotificationPreferences'] = 'Kunngj??ringsinnstillinger';
		$strings['ManageAnnouncements'] = 'Kunngj??ringer';
		$strings['Responsibilities'] = 'Ansvarsforhold';
		$strings['GroupReservations'] = 'Gruppereservasjoner';
		$strings['ResourceReservations'] = 'Enhetsreservasjoner';
		$strings['Customization'] = 'Personlige innstillinger';
		$strings['Attributes'] = 'Attributter';
		$strings['AccountActivation'] = 'Kontoaktivering';
		$strings['ScheduleReservations'] = 'Opprett reservasjoner';
		$strings['Reports'] = 'Rapporter';
		$strings['GenerateReport'] = 'Opprett ny rapport';
		$strings['MySavedReports'] = 'Mine lagrede rapporter';
		$strings['CommonReports'] = 'Vanlige rapporter';
		$strings['ViewDay'] = 'Vis dag';
		$strings['Group'] = 'Gruppe';
		$strings['ManageConfiguration'] = 'Program Konfigurasjon';
		$strings['LookAndFeel'] = 'Web-utseende';
		$strings['ManageResourceGroups'] = 'Enhetsgrupper';
		$strings['ManageResourceTypes'] = 'Enhetstyper';
		$strings['ManageResourceStatus'] = 'Enhetsstatuser';
		// End Page Titles

		// Day representations
		$strings['DaySundaySingle'] = 'S';
		$strings['DayMondaySingle'] = 'M';
		$strings['DayTuesdaySingle'] = 'T';
		$strings['DayWednesdaySingle'] = 'O';
		$strings['DayThursdaySingle'] = 'T';
		$strings['DayFridaySingle'] = 'F';
		$strings['DaySaturdaySingle'] = 'L';

		$strings['DaySundayAbbr'] = 'S??n';
		$strings['DayMondayAbbr'] = 'Man';
		$strings['DayTuesdayAbbr'] = 'Tir';
		$strings['DayWednesdayAbbr'] = 'Ons';
		$strings['DayThursdayAbbr'] = 'Tor';
		$strings['DayFridayAbbr'] = 'Fre';
		$strings['DaySaturdayAbbr'] = 'L??r';
		// End Day representations

		// Email Subjects
		$strings['ReservationApprovedSubject'] = 'Din reservasjon er godkjent';
		$strings['ReservationCreatedSubject'] = 'Din reservasjon ble opprettet';
		$strings['ReservationUpdatedSubject'] = 'Din reservasjon ble oppdatert';
		$strings['ReservationDeletedSubject'] = 'Din reservasjon ble slettet';
		$strings['ReservationCreatedAdminSubject'] = 'Kunngj??ring: En reservasjon ble opprettet';
		$strings['ReservationUpdatedAdminSubject'] = 'Kunngj??ring: En reservasjon ble oppdatert';
		$strings['ReservationDeleteAdminSubject'] = 'Kunngj??ring: En reservasjon ble slettet';
		$strings['ReservationApprovalAdminSubject'] = 'Kunngj??ring: En reservasjon trenger godkjenning';
		$strings['ParticipantAddedSubject'] = 'Kunngj??ring: Deltaker lagt til en reservasjon';
		$strings['ParticipantDeletedSubject'] = 'Reservasjon fjernet';
		$strings['InviteeAddedSubject'] = 'Reservasjonsinvitasjon';
		$strings['ResetPassword'] = 'Anmoding om tilbakestilling av passord';
		$strings['ActivateYourAccount'] = 'Vennligst aktiver din konto';
		$strings['ReportSubject'] = 'Din anmodede rapport (%s)';
		$strings['ReservationStartingSoonSubject'] = 'Reservasjonen av %s starter om kort tid';
		$strings['ReservationEndingSoonSubject'] = 'Reservasjonen av %s slutter snart';
		$strings['UserAdded'] = 'En ny bruker er lagt til';
		// End Email Subjects

		$this->Strings = $strings;

		return $this->Strings;
	}

	/**
	 * @return array
	 */
	protected function _LoadDays()
	{
		$days = parent::_LoadDays();

		/***
        DAY NAMES
        All of these arrays MUST start with Sunday as the first element
        and go through the seven day week, ending on Saturday
         ***/
        // The full day name
         $days['full'] = array('S??ndag', 'Mandag', 'Tirsdag', 'Onsdag', 'Torsdag', 'Fredag', 'L??rdag');
        // The three letter abbreviation
        $days['abbr'] = array('S??n', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'L??r');
        // The two letter abbreviation
        $days['two'] = array('S??', 'Ma', 'Ti', 'On', 'To', 'Fr', 'L??');
        // The one letter abbreviation
        $days['letter'] = array('S', 'M', 'T', 'O', 'T', 'F', 'L');

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
        $months['full'] = array('Januar', 'Februar', 'Mars', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Desember');
        // The three letter month name
        $months['abbr'] = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des');

        $this->Months = $months;
    }

    protected function _LoadLetters()
    {
        $this->Letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '??', '??', '??');
    }

    protected function _GetHtmlLangCode()
    {
        return 'no_no';
    }
}
