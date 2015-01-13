﻿/*
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.dialog.add('cellProperties',function(a){var b=a.lang.table,c=b.cell,d=a.lang.common,e=CKEDITOR.dialog.validate,f=/^(\d+(?:\.\d+)?)(px|%)$/,g=/^(\d+(?:\.\d+)?)px$/,h=CKEDITOR.tools.bind;function i(){return{type:'html',html:'&nbsp;'};};function j(k,l){var m=function(){p(this);l(this);},n=function(){p(this);},o=function(q){q.on('ok',m);q.on('cancel',n);},p=function(q){q.removeListener('ok',m);q.removeListener('cancel',n);};a.execCommand(k);if(a._.storedDialogs.colordialog)o(a._.storedDialogs.colordialog);else CKEDITOR.on('dialogDefinition',function(q){if(q.data.name!=k)return;var r=q.data.definition;q.removeListener();r.onLoad=CKEDITOR.tools.override(r.onLoad,function(s){return function(){o(this);r.onLoad=s;if(typeof s=='function')s.call(this);};});});};return{title:c.title,minWidth:CKEDITOR.env.ie&&CKEDITOR.env.quirks?550:480,minHeight:CKEDITOR.env.ie?CKEDITOR.env.quirks?180:150:140,contents:[{id:'info',label:c.title,accessKey:'I',elements:[{type:'hbox',widths:['40%','5%','40%'],children:[{type:'vbox',padding:0,children:[{type:'hbox',widths:['70%','30%'],children:[{type:'text',id:'width',label:b.width,widths:['71%','29%'],labelLayout:'horizontal',validate:e.number(c.invalidWidth),setup:function(k){var l=f.exec(k.$.style.width);if(l)this.setValue(l[1]);},commit:function(k){var l=this.getDialog().getValueOf('info','widthType');if(this.getValue()!=='')k.$.style.width=this.getValue()+l;else k.$.style.width='';},'default':''},{type:'select',id:'widthType',labelLayout:'horizontal',widths:['0%','100%'],label:'','default':'px',items:[[b.widthPx,'px'],[b.widthPc,'%']],setup:function(k){var l=f.exec(k.$.style.width);if(l)this.setValue(l[2]);}}]},{type:'hbox',widths:['70%','30%'],children:[{type:'text',id:'height',label:b.height,'default':'',widths:['71%','29%'],labelLayout:'horizontal',validate:e.number(c.invalidHeight),setup:function(k){var l=g.exec(k.$.style.height);if(l)this.setValue(l[1]);},commit:function(k){if(this.getValue()!=='')k.$.style.height=this.getValue()+'px';else k.$.style.height='';}},{type:'html',html:b.widthPx}]},i(),{type:'select',id:'wordWrap',labelLayout:'horizontal',label:c.wordWrap,widths:['50%','50%'],'default':'yes',items:[[c.yes,'yes'],[c.no,'no']],commit:function(k){if(this.getValue()=='no')k.setAttribute('noWrap','nowrap');else k.removeAttribute('noWrap');}},i(),{type:'select',id:'hAlign',labelLayout:'horizontal',label:c.hAlign,widths:['50%','50%'],'default':'',items:[[d.notSet,''],[b.alignLeft,'left'],[b.alignCenter,'center'],[b.alignRight,'right']],setup:function(k){this.setValue(k.getAttribute('align')||'');
},commit:function(k){if(this.getValue())k.setAttribute('align',this.getValue());else k.removeAttribute('align');}},{type:'select',id:'vAlign',labelLayout:'horizontal',label:c.vAlign,widths:['50%','50%'],'default':'',items:[[d.notSet,''],[c.alignTop,'top'],[c.alignMiddle,'middle'],[c.alignBottom,'bottom'],[c.alignBaseline,'baseline']],setup:function(k){this.setValue(k.getAttribute('vAlign')||'');},commit:function(k){if(this.getValue())k.setAttribute('vAlign',this.getValue());else k.removeAttribute('vAlign');}}]},i(),{type:'vbox',padding:0,children:[{type:'select',id:'cellType',label:c.cellType,labelLayout:'horizontal',widths:['50%','50%'],'default':'td',items:[[c.data,'td'],[c.header,'th']],setup:function(k){this.setValue(k.getName());},commit:function(k){k.renameNode(this.getValue());}},i(),{type:'text',id:'rowSpan',label:c.rowSpan,labelLayout:'horizontal',widths:['50%','50%'],'default':'',validate:e.integer(c.invalidRowSpan),setup:function(k){this.setValue(k.getAttribute('rowSpan')||'');},commit:function(k){if(this.getValue())k.setAttribute('rowSpan',this.getValue());else k.removeAttribute('rowSpan');}},{type:'text',id:'colSpan',label:c.colSpan,labelLayout:'horizontal',widths:['50%','50%'],'default':'',validate:e.integer(c.invalidColSpan),setup:function(k){this.setValue(k.getAttribute('colSpan')||'');},commit:function(k){if(this.getValue())k.setAttribute('colSpan',this.getValue());else k.removeAttribute('colSpan');}},i(),{type:'hbox',padding:0,widths:['80%','20%'],children:[{type:'text',id:'bgColor',label:c.bgColor,labelLayout:'horizontal',widths:['70%','30%'],'default':'',setup:function(k){this.setValue(k.getAttribute('bgColor')||'');},commit:function(k){if(this.getValue())k.setAttribute('bgColor',this.getValue());else k.removeAttribute('bgColor');}},{type:'button',id:'bgColorChoose',label:c.chooseColor,style:'margin-left: 10px',onClick:function(){var k=this;j('colordialog',function(l){k.getDialog().getContentElement('info','bgColor').setValue(l.getContentElement('picker','selectedColor').getValue());});}}]},i(),{type:'hbox',padding:0,widths:['80%','20%'],children:[{type:'text',id:'borderColor',label:c.borderColor,labelLayout:'horizontal',widths:['70%','30%'],'default':'',setup:function(k){this.setValue(k.getStyle('border-color')||'');},commit:function(k){if(this.getValue())k.setStyle('border-color',this.getValue());else k.removeStyle('border-color');}},{type:'button',id:'borderColorChoose',label:c.chooseColor,style:'margin-left: 10px',onClick:function(){var k=this;
j('colordialog',function(l){k.getDialog().getContentElement('info','borderColor').setValue(l.getContentElement('picker','selectedColor').getValue());});}}]}]}]}]}],onShow:function(){var k=this;k.cells=CKEDITOR.plugins.tabletools.getSelectedCells(k._.editor.getSelection());k.setupContent(k.cells[0]);},onOk:function(){var k=this.cells;for(var l=0;l<k.length;l++)this.commitContent(k[l]);}};});
