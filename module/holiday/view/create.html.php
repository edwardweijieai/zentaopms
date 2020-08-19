<?php
/**
 * The create view file of holiday module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2018 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      chujilu <chujilu@cnezsoft.com>
 * @package     attend
 * @version     $Id$
 * @link        http://www.ranzhi.org
 */
?>
<?php include '../../common/view/header.html.php';?>
<div id='mainContent' class='main-content'>
  <div class='center-block'>
    <div class='main-header'>
      <h2>
        <?php echo $lang->holiday->create;?>
      </h2>
    </div>
    <form class='form-ajax' method='post'>
      <table class='table table-form table-condensed'>
        <tr>
          <th class='w-80px'><?php echo $lang->holiday->type;?></th>
          <td><?php echo html::radio('type', $lang->holiday->typeList, 'holiday');?></td>
          <td></td>
        </tr>
        <tr>
          <th class='w-80px'><?php echo $lang->holiday->name;?></th>
          <td><?php echo html::input('name', '', "class='form-control'");?></td>
          <td></td>
        </tr>
        <tr>
          <th><?php echo $lang->holiday->begin;?></th>
          <td><?php echo html::input('begin', '', "class='form-control form-date'");?></td>
          <td></td>
        </tr>
        <tr>
          <th><?php echo $lang->holiday->end;?></th>
          <td><?php echo html::input('end', '', "class='form-control form-date'");?></td>
          <td></td>
        </tr>
        <tr>
          <th><?php echo $lang->holiday->desc?></th>
          <td><?php echo html::textarea('desc', '', "class='form-control'")?></td>
          <td></td>
        </tr> 
        <tr><th></th><td clospan='2'><?php echo baseHTML::submitButton();?></td></tr>
      </table>
    </form>
  </div>
</div>
<?php include '../../common/view/footer.html.php';?>
