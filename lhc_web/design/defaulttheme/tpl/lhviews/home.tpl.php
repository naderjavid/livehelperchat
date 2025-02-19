<script>
    <?php if (isset($default_view)) : ?>var vctrl_default_view_id = <?php echo $default_view;?>;<?php endif;?>
</script>
<div ng-controller="LiveHelperChatViewsCtrl as vctrl" >
    <div class="row">
        <div translate="no" class="col chats-column border-right pr-0 pl-0">
            <div class="w-100 d-flex flex-column flex-grow-1">
                <table class="table table-sm mb-0 table-small">
                    <thead>
                    <tr>
                        <th width="99%">
                            <span title="Name" class="material-icons">saved_search</span> <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('views/view','My views');?>
                        </th>
                        <th width="1%" nowrap="nowrap">
                            <a ng-if="vctrl.invites > 0" onclick="lhc.revealModal({'url':WWW_DIR_JAVASCRIPT+'views/acceptinvites'})" class="blink-ani text-danger" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('views/view','You have shared views with you!');?>"><span class="material-icons">share</span>{{vctrl.invites}}<a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat="view in vctrl.views track by view.id">
                        <td>
                            <div class="p-1 fs13" title="{{view.description}}">
                                <a class="d-block" ng-class="{'font-weight-bold':view.id == vctrl.currentView.id}" ng-click="vctrl.loadView(view)">
                                    <span ng-if="view.id != vctrl.currentView.id" class="float-right text-muted fs12" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('views/view','Updated ago');?>">{{view.updated_ago || '0 s.'}}</span>
                                    <span ng-if="view.id == vctrl.currentView.id" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('views/view','Live updating');?>, {{view.updated_ago || '0 s.'}}" class="float-right text-muted material-icons">update</span>
                                    <span title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('views/view','This view is passive and is not updated live');?>" class="text-warning material-icons float-right ml-2" ng-if="view.id != vctrl.currentView.id && view.passive">timer</span>
                                    <?php include(erLhcoreClassDesign::designtpl('lhviews/custom_type_multiinclude.tpl.php')); ?>
                                    <span class="material-icons" ng-if="view.scope == 'chat'">chat</span>
                                    {{view.name}}
                                    <span class="badge pb-1 font-weight-normal badge-light" ng-if="view.total_records > 0">({{view.total_records}})</span>
                                </a>
                            </div>
                        </td>
                        <td nowrap>
                            <div class="btn-group">
                                <i class="material-icons settings text-muted fs14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">menu</i>
                                <div class="dropdown-menu py-0 fs13">
                                    <a class="dropdown-item text-muted action-image px-2" ng-click="vctrl.shareView(view)"><span class="material-icons">share</span><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('views/view','Share');?></a>
                                    <a class="dropdown-item text-muted px-2" href="<?php echo erLhcoreClassDesign::baseurl('views/edit')?>/{{view.id}}"><span class="material-icons">mode_edit</span><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('views/view','Edit');?></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-muted px-2" ng-click="vctrl.deleteView(view)"><span class="material-icons">delete</span><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('views/view','Delete');?></a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col" id="view-content">
            ...
        </div>
    </div>
</div>


