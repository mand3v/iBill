<?php
/* Smarty version 3.1.30, created on 2017-08-21 23:16:25
  from "C:\Bitnami\wampstack-5.6.31-0\apache2\htdocs\ibill\ui\theme\ibilling\about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599b3189918979_87358372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27dec17284945addc4e76d246623d40aabb7b776' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-5.6.31-0\\apache2\\htdocs\\ibill\\ui\\theme\\ibilling\\about.tpl',
      1 => 1503294401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_599b3189918979_87358372 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1>This is the "About" page placeholder</h5>

<!--
<div class="row">
    <div class="col-md-12">
        <div id="updateProgressbar" class="progress" style="display: none;">
            <div class="progress progress-striped active">
                <div class="progress-bar" id="ib_progressing" role="progressbar" data-transitiongoal="10"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="ibox float-e-margins" id="ib_box">
            <div class="ibox-title">
                <h5>iBilling App Version - <?php echo $_smarty_tpl->tpl_vars['_c']->value['build'];?>
</h5>

            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['app_stage']->value == 'Demo') {?>

<input type="hidden" name="purchase_code" id="purchase_code" value="">

            <?php } else { ?>

            <div class="ibox float-e-margins" id="ib_box">

                <div class="ibox-content">


                    <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/activate_license_post/">





                        <div class="form-group">
                            <label for="purchase_code">Purchase Code</label>
                            <input type="text" required class="form-control" id="purchase_code" name="purchase_code" value="NA" Readonly>
                        </div>

                    </form>




                </div>
            </div>

        <?php }?>



    </div>

    <div class="col-md-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <label for="resp"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Response'];?>
</label>

            </div>
            <div class="ibox-content">

                <form class="form-horizontal push-10-t push-10" method="post" onsubmit="return false;">

                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material floating">
                                <textarea class="form-control ib_resp" id="resp" name="resp" rows="9"></textarea>
                                <label for="api_header_resp">You are using latest version.</label>
                            </div>

                        </div>
                    </div>

                </form>




            </div>
        </div>



    </div>



</div>
-->

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
