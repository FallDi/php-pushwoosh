<?php

/**
 * Copyright 2014 SARL GOMOOB. All rights reserved.
 */
namespace Gomoob\Pushwoosh;

use Gomoob\Pushwoosh\Model\Request\CreateMessageRequest;
use Gomoob\Pushwoosh\Model\Request\RegisterDeviceRequest;
use Gomoob\Pushwoosh\Model\Request\UnregisterDeviceRequest;

/**
 * Interface which defines a Pushwoosh client.
 *
 * @author Baptiste GAILLARD (baptiste.gaillard@gomoob.com)
 */
interface IPushwoosh {

	/**
	 * Function used to create a Pushwoosh message.
	 *
	 * @param \Gomoob\Pushwoosh\Model\Request\CreateMessageRequest $createMessageRequest the create message request used
	 *        to create the Pushwoosh message.
	 *
	 * @return \Gomoob\Pushwoosh\Model\Response\CreateMessageResponse the resulting create message response.
	 *
	 * @see http://www.pushwoosh.com/programming-push-notification/pushwoosh-push-notification-remote-api/#PushserviceAPI-Method-messages-create
	 */
	function createMessage(CreateMessageRequest $createMessageRequest);

	function deleteMessage();

	/**
	 * Gets the Pushwoosh application ID to be used by default by all the requests performed by the Pushwoosh client.
	 * This identifier can be overwritten by request if needed.
	 *
	 * <p>WARNING: If the application group is defined then the application must not be defined.</p>
	 *
	 * @return string the Pushwoosh application ID to be used by default by all the requests performed by the Pushwoosh
	 *         client.
	 */
	function getApplication();

	/**
	 * Gets the Pushwoosh applications group code to be used to defautl by all the requests performed by the Pushwoosh
	 * client. This identifier can be overwritten by requests if needed.
	 *
	 * <p>WARNING: If the application is defined then the applications groups must not be defined.</p>
	 *
	 * @return string the Pushwoosh applications group code to be used to defautl by all the requests performed by the
	 *         Pushwoosh client.
	 */
	function getApplicationsGroup();

	/**
	 * Gets the API access token from the Pushwoosh control panel (create this token at
	 * https://cp.pushwoosh.com/api_access).
	 *
	 * @return string the API access token from the Pushwoosh control panel (create this token at
	 *         https://cp.pushwoosh.com/api_access).
	 */
	function getAuth();

	function getNearestZone();

	function pushStat();

	/**
	 * Function used to register a device for an application.
	 *
	 * @param \Gomoob\Pushwoosh\Model\Request\RegisterDeviceRequest $registerDeviceRequest the register device request
	 *        used to register a device for the application.
	 *
	 * @return \Gomoob\Pushwoosh\Model\Response\RegisterDeviceResponse the resulting register device response.
	 *
	 * @see http://www.pushwoosh.com/programming-push-notification/pushwoosh-push-notification-remote-api/#PushserviceAPI-MethodRegister
	 */
	function registerDevice(RegisterDeviceRequest $registerDeviceRequest);

	/**
	 * Sets the Pushwoosh application ID to be used by default by all the requests performed by the Pushwoosh client.
	 * This identifier can be overwritten by request if needed.
	 *
	 * <p>WARNING: If the application group is defined then the application must not be defined.</p>
	 *
	 * @param string $application the Pushwoosh application ID to be used by default by all the requests performed by
	 *        the Pushwoosh client. This identifier can be overwritten by request if needed.
	 *
	 * @return \Gommob\Pushwoosh\IPushwoosh this instance.
	 */
	function setApplication($application);

	/**
	 * Sets the Pushwoosh applications group code to be used to defautl by all the requests performed by the Pushwoosh
	 * client. This identifier can be overwritten by requests if needed.
	 *
	 * <p>WARNING: If the application is defined then the applications groups must not be defined.</p>
	 *
	 * @param string $applicationsGroup the Pushwoosh applications group code to be used to defautl by all the requests
	 *        performed by the Pushwoosh client.
	 *
	 * @return \Gommob\Pushwoosh\IPushwoosh this instance.
	 */
	function setApplicationsGroup($applicationsGroup);

	/**
	 * Sets the API access token from the Pushwoosh control panel (create this token at
	 * https://cp.pushwoosh.com/api_access).
	 *
	 * @param string $auth the API access token from the Pushwoosh control panel (create this token at
	 * https://cp.pushwoosh.com/api_access).
	 *
	 * @return \Gommob\Pushwoosh\IPushwoosh this instance.
	 */
	function setAuth($auth);

	function setBadge();

	function setTags();

	/**
	 * Function used to remove a device from an application.
	 *
	 * @param \Gomoob\Pushwoosh\Model\Request\UnregisterDeviceRequest $unregisterDeviceRequest the unergister device
	 *        request used to unregister a device from an application.
	 *
	 * @see http://www.pushwoosh.com/programming-push-notification/pushwoosh-push-notification-remote-api/#PushserviceAPI-MethodUnregister
	 */
	function unregisterDevice(UnregisterDeviceRequest $unregisterDeviceRequest);

}