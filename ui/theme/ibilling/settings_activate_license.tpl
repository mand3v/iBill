{include file="sections/header.tpl"}
<div class="row">
    <div class="col-md-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Activate License</h5>

            </div>
            <div class="ibox-content">

                <form role="form" name="accadd" method="post" action="{$_url}settings/activate_license_post/">

                    <div class="form-group">
                        <label for="fullname">Name</label>
                        <input type="text" required class="form-control" id="fullname" name="fullname" value="Backet FS Tr." Readonly>

                    </div>

                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" required class="form-control" id="email" name="email" value="admin@local.host" Readonly>

                    </div>
                    <div class="form-group">
                        <label for="purchase_code">Purchase Code</label>
                        <input type="text" required class="form-control" id="purchase_code" name="purchase_code" value="NA" Readonly>
                    </div>




                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> {$_L['Submit']}</button>
                </form>

            </div>
        </div>



    </div>



</div>
{include file="sections/footer.tpl"}
