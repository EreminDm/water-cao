{**
 * templates/user/registerSite.tpl
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Site registration.
 *
 *}
{strip}
{include file="common/header.tpl"}
<link rel="stylesheet" href="http://water-ca.org/ej/public/journals/1/journalStyleSheet.css" type="text/css">
<link rel="stylesheet" href="http://water-ca.org/ej/public/journals/1/usersStyle.css" type="text/css">
{/strip}
<div id="journals">
{iterate from=journals item=journal}
	{if !$notFirstJournal}
		{translate key="user.register.selectJournal"}:
		<ul>
		{assign var=notFirstJournal value=1}
	{/if}
	<li><a href="{url journal=$journal->getPath() page="user" op="register"}">{$journal->getLocalizedTitle()|escape}</a></li>
{/iterate}
{if $journals->wasEmpty()}
	{translate key="user.register.noJournals"}
{else}
	</ul>
{/if}
</div>
{include file="common/footer.tpl"}

