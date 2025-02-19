<?php if ($currentUser->hasAccessTo('lhchat','use')) : ?>
	<div class="card card-dashboard" data-panel-id="active_chats" ng-init="lhc.getToggleWidget('activec_widget_exp');lhc.getToggleWidgetSort('active_chats_sort')">
		<div class="card-header">
			<a href="<?php echo erLhcoreClassDesign::baseurl('chat/list')?>/(chat_status_ids)/1"><i class="material-icons chat-active">chat</i> <?php include(erLhcoreClassDesign::designtpl('lhfront/dashboard/panels/titles/active_chats.tpl.php'));?> ({{active_chats.list.length}}{{active_chats.list.length == lhc.limita ? '+' : ''}})</a>
			<a title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('pagelayout/pagelayout','collapse/expand')?>" ng-click="lhc.toggleWidget('activec_widget_exp')" class="fs24 float-left material-icons exp-cntr">{{lhc.toggleWidgetData['activec_widget_exp'] == false ? 'expand_less' : 'expand_more'}}</a>
		</div>

		<div ng-if="lhc.toggleWidgetData['activec_widget_exp'] !== true">

			<?php $optinsPanel = array('panelid' => 'actived','limitid' => 'limita', 'userid' => 'activeu'); ?>
			<?php include(erLhcoreClassDesign::designtpl('lhfront/dashboard/panels/parts/options.tpl.php'));?>

			<div ng-if="active_chats.list.length > 0" class="panel-list">
				<?php include(erLhcoreClassDesign::designtpl('lhfront/dashboard/panels/bodies/active.tpl.php'));?>
			</div>

			<div ng-if="active_chats.list.length == 0" class="m-1 alert alert-light"><i class="material-icons">search</i><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','All active chats will appear here.')?></div>

		</div>
	</div>
<?php endif; ?>