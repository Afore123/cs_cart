<?php /* Smarty version Smarty-3.1.21, created on 2015-12-23 16:29:05
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\payments\components\cc_processors\exalt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7710567aa1a13117c6-19871170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37d505599702a4934276d7bce4700f593fda0510' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\payments\\components\\cc_processors\\exalt.tpl',
      1 => 1450872370,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7710567aa1a13117c6-19871170',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'processor_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_567aa1a14b3742_59729010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567aa1a14b3742_59729010')) {function content_567aa1a14b3742_59729010($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('Merchant_login','ttc_Merchant_login','APIKey','ttc_APIKey','currency','currency_code_usd','currency_code_eur','currency_code_aud','currency_code_cad','currency_code_chf','currency_code_czk','currency_code_dkk','currency_code_frf','currency_code_gbp','currency_code_hkd','currency_code_huf','currency_code_ils','currency_code_jpy','currency_code_ltl','currency_code_lvl','currency_code_mxn','currency_code_nok','currency_code_nzd','currency_code_pln','currency_code_rur','currency_code_sek','currency_code_sgd','currency_code_skk','currency_code_thb','currency_code_try','currency_code_kpw','currency_code_krw','currency_code_zar','test_live_mode','test','test','live','transaction_type','authorize_capture','authorize_only','order_prefix'));
?>
<div class="control-group">
    <label class="control-label" for="Merchant_login"><?php echo $_smarty_tpl->__("Merchant_login");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("ttc_Merchant_login")), 0);?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][Merchant_login]" id="login" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['Merchant_login'], ENT_QUOTES, 'UTF-8');?>
" >
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="APIKey"><?php echo $_smarty_tpl->__("APIKey");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("ttc_APIKey")), 0);?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][APIKey]" id="transaction_key" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['APIKey'], ENT_QUOTES, 'UTF-8');?>
" >
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="currency"><?php echo $_smarty_tpl->__("currency");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][currency]" id="currency">
            <option value="USD"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="USD") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_usd");?>
</option>
            <option value="EUR"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="EUR") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_eur");?>
</option>
            <option value="AUD"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="AUD") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_aud");?>
</option>
            <option value="CAD"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="CAD") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_cad");?>
</option>
            <option value="CHF"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="CHF") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_chf");?>
</option>
            <option value="CZK"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="CZK") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_czk");?>
</option>
            <option value="DKK"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="DKK") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_dkk");?>
</option>
            <option value="FRF"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="FRF") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_frf");?>
</option>
            <option value="GBP"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="GBP") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_gbp");?>
</option>
            <option value="HKD"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="HKD") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_hkd");?>
</option>
            <option value="HUF"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="HUF") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_huf");?>
</option>
            <option value="ILS"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="ILS") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_ils");?>
</option>
            <option value="JPY"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="JPY") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_jpy");?>
</option>
            <option value="LTL"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="LTL") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_ltl");?>
</option>
            <option value="LVL"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="LVL") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_lvl");?>
</option>
            <option value="MXN"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="MXN") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_mxn");?>
</option>
            <option value="NOK"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="NOK") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_nok");?>
</option>
            <option value="NZD"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="NZD") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_nzd");?>
</option>
            <option value="PLN"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="PLN") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_pln");?>
</option>
            <option value="RUR"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="RUR") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_rur");?>
</option>
            <option value="SEK"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="SEK") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_sek");?>
</option>
            <option value="SGD"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="SGD") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_sgd");?>
</option>
            <option value="SKK"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="SKK") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_skk");?>
</option>
            <option value="THB"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="THB") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_thb");?>
</option>
            <option value="TRY"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="TRY") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_try");?>
</option>
            <option value="KPW"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="KPW") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_kpw");?>
</option>
            <option value="KRW"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="KRW") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_krw");?>
</option>
            <option value="ZAR"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="ZAR") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_zar");?>
</option>
        </select>
    </div>
</div>


<div class="control-group">
    <label class="control-label" for="mode"><?php echo $_smarty_tpl->__("test_live_mode");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][mode]" id="mode">
            <option value="test" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['mode']=="test") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("test");?>
</option>
            <option value="developer" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['mode']=="developer") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("test");?>
 (dev)</option>
            <option value="live" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['mode']=="live") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("live");?>
</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="transaction_type"><?php echo $_smarty_tpl->__("transaction_type");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][transaction_type]" id="transaction_type">
            <option value="P" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['transaction_type']=="P") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("authorize_capture");?>
</option>
            <option value="A" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['transaction_type']=="A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("authorize_only");?>
</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="order_prefix"><?php echo $_smarty_tpl->__("order_prefix");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][order_prefix]" id="order_prefix" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['order_prefix'], ENT_QUOTES, 'UTF-8');?>
" >
    </div>
</div><?php }} ?>
