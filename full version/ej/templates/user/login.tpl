{**
 * templates/user/login.tpl
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * User login form.
 *
 *}
{strip}
{assign var="helpTopicId" value="user.registerAndProfile"}
{assign var="registerOp" value="register"}
{assign var="registerLocaleKey" value="user.login.registerNewAccount"}
<link rel="stylesheet" href="http://water-ca.org/ej/public/journals/1/journalStyleSheet.css" type="text/css">
<link rel="stylesheet" href="http://water-ca.org/ej/public/journals/1/usersStyle.css" type="text/css">
{include file="core:user/login.tpl"}
{/strip}

