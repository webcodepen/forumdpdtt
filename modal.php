<?php
/**
 * Created by PhpStorm.
 * User: Mabiyorov Bekzod
 * Date: 10.12.2018
 * Time: 23:23
 */
?>
<div id="modal-large"  class="col-md-8 modal_home_con modal modal_home fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Форма барои саволгузори</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <div class="widget has-shadow">

                <div class="publisher code_cont publisher-multi">
                    <textarea  class="textarea_code col-md-12 publisher-input" rows="3" placeholder="..."></textarea>
                    <div class="publisher-bottom d-flex justify-content-end">
                        <a class="publisher-btn a_la-smile" href="javascript:void(0);"><i class="la la-smile-o"></i></a>
                        <a  class="a_la-smile publisher-btn" href="javascript:void(0);"><i class="la la-camera"></i></a>
                        <button class="btn btn-gradient-01">Post Comment</button>
                    </div>
                </div>


            </div>
            <div class="modal-body">

                <p>
                    Савоҳои хурдаро гузоред  ва ба ӯ ҷавоб гиред
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-shadow" data-dismiss="modal">Сахт кардан</button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#success-modal">Сабт кардан</button>
            </div>
        </div>
    </div>
</div>


<!-- Begin Success Modal -->
<div id="success-modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="sa-icon sa-success animate" style="display: block;">
                    <span class="sa-line sa-tip animateSuccessTip"></span>
                    <span class="sa-line sa-long animateSuccessLong"></span>
                    <div class="sa-placeholder"></div>
                    <div class="sa-fix"></div>
                </div>
                <div class="section-title mt-5 mb-2">
                    <h2 class="text-gradient-02">Ташаккур!</h2>
                </div>

                <button type="button" class="btn btn-shadow" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>
<!-- End Success Modal -->