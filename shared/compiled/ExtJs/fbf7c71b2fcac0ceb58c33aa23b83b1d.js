
var proxyUsersToReassignList=new Ext.data.HttpProxy({api:{read:'proxyReassignUsersList'}});var readerUsersToReassignList=new Ext.data.JsonReader({root:'data',fields:[{name:'userUid',mapping:'userUid'},{name:'userFullname',mapping:'userFullname'}]});var writerUsersToReassignList=new Ext.data.JsonWriter({encode:true,writeAllFields:true});var storeUsersToReassign=new Ext.data.Store({remoteSort:false,autoLoad:true,proxy:proxyUsersToReassignList,reader:readerUsersToReassignList,writer:writerUsersToReassignList,autoSave:false});Ext.util.Format.comboRenderer=function(combo){return function(value){var record=combo.findRecord(combo.valueField,value);return record?record.get(combo.displayField):combo.valueNotFoundText;}}
var comboUsersToReassign=new Ext.form.ComboBox({fieldLabel:_('ID_SEARCH'),editable:true,forceSelection:false,minChars:0,valueField:'userId',displayField:'userFullname',selectOnFocus:true,typeAhead:false,autocomplete:true,hideTrigger:Boolean,alignTo:'right',mode:'remote',triggerAction:'all',emptyText:_('ID_ENTER_SEARCH_TERM'),disabled:true,width:280,boxMaxWidth:180,allowBlank:false,store:storeUsersToReassign,listeners:{'select':function(comp,record,index){var row=Ext.getCmp('TasksToReassign').getSelectionModel().getSelected();row.set('APP_REASSIGN_USER_UID',record.get('userUid'));row.set('APP_REASSIGN_USER',record.get('userFullname'));this.setValue(record.get('userFullname'));}}});