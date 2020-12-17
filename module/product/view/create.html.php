<?php
/**
 * The create view of product module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     product
 * @version     $Id: create.html.php 4129 2013-01-18 01:58:14Z wwccss $
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/kindeditor.html.php';?>
<?php js::set('noProject', false);?>
<div id="mainContent" class="main-content">
  <div class="center-block">
    <div class="main-header">
      <h2><?php echo $lang->product->create;?></h2>
    </div>
    <form class="load-indicator main-form form-ajax" id="createForm" method="post" target='hiddenwin'>
      <table class="table table-form">
        <tbody>
          <tr>
            <th class='w-140px'><?php echo $lang->program->PGMCommon;?></th>
            <td><?php echo html::select('program', $programs, '', "class='form-control chosen' required");?></td><td></td>
          </tr>  
          <tr>
            <th><?php echo $lang->product->name;?></th>
            <td><?php echo html::input('name', '', "class='form-control input-product-title' required");?></td><td></td>
          </tr>
          <tr>
            <th><?php echo $lang->product->code;?></th>
            <td><?php echo html::input('code', '', "class='form-control input-product-code' required");?></td><td></td>
          </tr>
          <tr>
            <th><?php echo $lang->product->PO;?></th>
            <td><?php echo html::select('PO', $poUsers, $this->app->user->account, "class='form-control chosen'");?></td><td></td>
          </tr>
          <tr>
            <th><?php echo $lang->product->QD;?></th>
            <td><?php echo html::select('QD', $qdUsers, '', "class='form-control chosen'");?></td><td></td>
          </tr>
          <tr>
            <th><?php echo $lang->product->RD;?></th>
            <td><?php echo html::select('RD', $rdUsers, '', "class='form-control chosen'");?></td><td></td>
          </tr>
          <tr>
            <th><?php echo $lang->product->type;?></th>
            <td>
              <?php
              $proudctTypeList = array();
              foreach($lang->product->typeList as $key => $type) $productTypeList[$key] = $type . zget($lang->product->typeTips, $key, '');
              ?>
              <?php echo html::select('type', $productTypeList, 'normal', "class='form-control'");?>
            </td><td></td>
          </tr>  
          <tr>
            <th><?php echo $lang->product->storyConcept;?></th>
            <td><?php echo html::select('storyConcept', $URSRPairs, $config->custom->URSR, "class='form-control chosen'");?></td>
            <td></td>
          </tr>
          <tr class='hide'>
            <th><?php echo $lang->product->status;?></th>
            <td><?php echo html::hidden('status', 'normal');?></td>
            <td></td>
          </tr>
          <?php $this->printExtendFields('', 'table');?>
          <tr>
            <th><?php echo $lang->product->desc;?></th>
            <td colspan='2'>
              <?php echo $this->fetch('user', 'ajaxPrintTemplates', "type=product&link=desc");?>
              <?php echo html::textarea('desc', '', "rows='8' class='form-control kindeditor' hidefocus='true' tabindex=''");?>
            </td>
          </tr>
          <tr>
            <th><?php echo $lang->product->acl;?></th>
            <td colspan='2'><?php echo nl2br(html::radio('acl', $lang->product->aclList, 'open', "onclick='setWhite(this.value);'", 'block'));?></td>
          </tr>
          <tr class="hidden" id="whitelistBox">
            <th><?php echo $lang->whitelist;?></th>
            <td><?php echo html::select('whitelist[]', $users, '', 'class="form-control chosen" multiple');?></td>
            <td></td>
          </tr>
          <tr>
            <td colspan='3' class='text-center form-actions'>
              <?php echo html::submitButton();?>
              <?php echo html::backButton();?>
            </td>
          </tr>
        </tbody>
      </table>
    </form>
  </div>
</div>
<?php include '../../common/view/footer.html.php';?>
