
Ext.namespace("dbInfo");dbInfo.application={init:function()
{var sumaryInfPanel=PMExt.createInfoPanel('../../'+skin+'/admin/getSystemInfo');var panelInfo=new Ext.Panel({id:'panelInfo',title:_("ID_SYSTEM_INFO"),frame:true,autoWidth:true,autoHeight:true,collapsible:false,items:[sumaryInfPanel]});var viewport=new Ext.Viewport({layout:"fit",items:[panelInfo]});}}
Ext.onReady(dbInfo.application.init,dbInfo.application);function showUpgradedLogs(){window.location='../../uxmodern/main/screamFileUpgrades';}