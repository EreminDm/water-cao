{**
 * plugins/blocks/languageToggle/block.tpl
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site sidebar menu -- language toggle.
 *
 *}

{if $enableLanguageToggle}
<div class="block" id="sidebarLanguageToggle">
   {foreach from=$languageToggleLocales key=langkey item=langname}
      {if $langkey == $currentLocale}
         <img src="{$baseUrl}/plugins/blocks/languageToggle/locale/{$langkey}/flag.png" alt="{$langname}" title="{$langname}" width="24" height="16" />
      {else}
         <a class="icon" href={if $languageToggleNoUser}'{$currentUrl|escape}{if strstr($currentUrl, '?')}&{else}?{/if}setLocale={$langkey}'{else}'{url page="user" op="setLocale" path=$langkey source=$smarty.server.REQUEST_URI escape=false}'{/if}>
            <img src="{$baseUrl}/plugins/blocks/languageToggle/locale/{$langkey}/flag.png" alt="{$langname}" title="{$langname}" width="24" height="16" />
         </a>
      {/if}
   {/foreach}
</div>
{/if}
