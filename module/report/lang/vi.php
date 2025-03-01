<?php
/**
 * The report module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license  ZPL (http://zpl.pub/page/zplv12.html)
 * @author   Nguyễn Quốc Nho <quocnho@gmail.com>
 * @package  report
 * @version  $Id: vi.php 5080 2013-07-10 00:46:59Z wyd621@gmail.com $
 * @link  http://www.zentao.net
 */
$lang->report->common     = 'Báo cáo';
$lang->report->index      = 'Trang báo cáo';
$lang->report->list       = 'Báo cáo';
$lang->report->item       = 'Hạng mục';
$lang->report->value      = 'Giá trị';
$lang->report->percent    = '%';
$lang->report->undefined  = 'Chưa định nghĩa';
$lang->report->query      = 'Truy vấn';
$lang->report->annual     = 'Tóm tắt theo năm';

$lang->report->colors[]   = 'AFD8F8';
$lang->report->colors[]   = 'F6BD0F';
$lang->report->colors[]   = '8BBA00';
$lang->report->colors[]   = 'FF8E46';
$lang->report->colors[]   = '008E8E';
$lang->report->colors[]   = 'D64646';
$lang->report->colors[]   = '8E468E';
$lang->report->colors[]   = '588526';
$lang->report->colors[]   = 'B3AA00';
$lang->report->colors[]   = '008ED6';
$lang->report->colors[]   = '9D080D';
$lang->report->colors[]   = 'A186BE';

$lang->report->assign['noassign'] = 'Chưa giao';
$lang->report->assign['assign']   = 'Đã giao';

$lang->report->singleColor[] = 'F6BD0F';

$lang->report->projectDeviation = 'Độ lệch '.$lang->projectCommon;
$lang->report->productSummary   = 'Tóm tắt '.$lang->productCommon;
$lang->report->bugCreate        = 'Báo cáo Bug';
$lang->report->bugAssign        = 'Bàn giao Bug';
$lang->report->workload         = 'Lượng công việc đội nhóm';
$lang->report->workloadAB       = 'Lượng công việc';
$lang->report->bugOpenedDate    = 'Bug được báo cáo từ';
$lang->report->beginAndEnd      = ' từ';
$lang->report->dept             = 'Phòng/Ban';
$lang->report->deviationChart   = 'Biểu đồ chênh lệch '.$lang->projectCommon;

$lang->reportList->project->lists[10] = 'Chênh lệch '.$lang->projectCommon . '|report|projectdeviation';
$lang->reportList->product->lists[10] = 'Tóm tắt '.$lang->productCommon . '|report|productsummary';
$lang->reportList->test->lists[10]    = 'Báo cáo Bug|report|bugcreate';
$lang->reportList->test->lists[13]    = 'Bàn giao Bug|report|bugassign';
$lang->reportList->staff->lists[10]   = 'Lượng công việc đội nhóm|report|workload';

$lang->report->id            = 'ID';
$lang->report->project       = $lang->projectCommon;
$lang->report->product       = $lang->productCommon;
$lang->report->user          = 'Người dùng';
$lang->report->bugTotal      = 'Bug';
$lang->report->task          = 'Nhiệm vụ';
$lang->report->estimate      = 'Dự tính';
$lang->report->consumed      = 'Đã làm';
$lang->report->remain        = 'Còn';
$lang->report->deviation     = 'Chênh lệch';
$lang->report->deviationRate = 'Tỷ lệ lệch';
$lang->report->total         = 'Tổng';
$lang->report->to            = 'to';
$lang->report->taskTotal     = "Tổng nhiệm vụ";
$lang->report->manhourTotal  = "Tổng số giờ";
$lang->report->validRate     = "Tỷ lệ hợp lý";
$lang->report->validRateTips = "Giải pháp được Giải quyết/Hoãn lại hoặc Giải quyết/Đã đóng.";
$lang->report->unplanned     = 'Chưa kế hoạch';
$lang->report->workday       = 'Giờ/ngày';
$lang->report->diffDays      = 'ngày';

$lang->report->typeList['default'] = 'Mặc định';
$lang->report->typeList['pie']     = 'Pie';
$lang->report->typeList['bar']     = 'Bar';
$lang->report->typeList['line']    = 'Line';

$lang->report->conditions    = 'Lọc theo:';
$lang->report->closedProduct = $lang->productCommon . ' đã đóng';
$lang->report->overduePlan   = 'Kế hoạch quá hạn';

/* daily reminder. */
$lang->report->idAB         = 'ID';
$lang->report->bugTitle     = 'Tên Bug';
$lang->report->taskName     = 'Tên nhiệm vụ';
$lang->report->todoName     = 'Tên việc';
$lang->report->testTaskName = 'Tên yêu cầu';
$lang->report->deadline     = 'Hạn chót';

$lang->report->mailTitle           = new stdclass();
$lang->report->mailTitle->begin    = 'Thông báo: Bạn có';
$lang->report->mailTitle->bug      = " %s) Bug,";
$lang->report->mailTitle->task     = " %s) nhiệm vụ,";
$lang->report->mailTitle->todo     = " (%s) việc,";
$lang->report->mailTitle->testTask = " (%s) yêu cầu,";

$lang->report->proVersion   = '<a href="https://api.zentao.net/goto.php?item=proversion&from=reportpage" target="_blank">Hãy thử ZenTao Pro để biết thêm!</a>';
$lang->report->proVersionEn = '<a href="http://api.zentao.pm/goto.php?item=proversion&from=reportpage" target="_blank">Hãy thử ZenTao Pro để biết thêm!</a>';

$lang->report->annualData = new stdclass();
$lang->report->annualData->title            = "%s work summary in %s";
$lang->report->annualData->exportByZentao   = "Export By ZenTao";
$lang->report->annualData->scope            = "Scope";
$lang->report->annualData->allUser          = "All Users";
$lang->report->annualData->allDept          = "Whole Company";
$lang->report->annualData->soFar            = " (%s)";
$lang->report->annualData->baseInfo         = "Basic Data";
$lang->report->annualData->actionData       = "Operation Data";
$lang->report->annualData->contributionData = "Contribution Data";
$lang->report->annualData->radar            = "Capability Radar Chart";
$lang->report->annualData->projects         = "{$lang->projectCommon} Data";
$lang->report->annualData->products         = "{$lang->productCommon} Data";
$lang->report->annualData->stories          = "Story Data";
$lang->report->annualData->tasks            = "Task Data";
$lang->report->annualData->bugs             = "Bug Data";
$lang->report->annualData->cases            = "Case Data";
$lang->report->annualData->statusStat       = "{$lang->storyCommon}/task/bug status distribution (as of today)";

$lang->report->annualData->companyUsers     = "Number of company";
$lang->report->annualData->deptUsers        = "Number of departments";
$lang->report->annualData->logins           = "Login times";
$lang->report->annualData->actions          = "Number of operations";
$lang->report->annualData->contributions    = "Number of contributions";
$lang->report->annualData->consumed         = "Consumed";
$lang->report->annualData->todos            = "Number of Todos";

$lang->report->annualData->storyStatusStat = "Story status distribution";
$lang->report->annualData->taskStatusStat  = "Task status distribution";
$lang->report->annualData->bugStatusStat   = "Bug status distribution";
$lang->report->annualData->caseResultStat  = "Case result distribution";
$lang->report->annualData->allStory        = "Total";
$lang->report->annualData->allTask         = "Total";
$lang->report->annualData->allBug          = "Total";
$lang->report->annualData->undone          = "Undone";
$lang->report->annualData->unresolve       = "Unresolve";

$lang->report->annualData->storyMonthActions = "Monthly story operation";
$lang->report->annualData->taskMonthActions  = "Monthly task operation";
$lang->report->annualData->bugMonthActions   = "Monthly bug operation";
$lang->report->annualData->caseMonthActions  = "Monthly case operation";

$lang->report->annualData->projectFields['name']  = "{$lang->projectCommon} name";
$lang->report->annualData->projectFields['story'] = "Finished stories";
$lang->report->annualData->projectFields['task']  = "Finished tasks";
$lang->report->annualData->projectFields['bug']   = "Resolved bugs";

$lang->report->annualData->productFields['name'] = "{$lang->productCommon} name";
$lang->report->annualData->productFields['plan'] = "Plans";
global $config;
if(!empty($config->URAndSR))
{
    $lang->report->annualData->productFields['requirement'] = "Created {$lang->URCommon}";
}
$lang->report->annualData->productFields['story']    = "Created {$lang->storyCommon}";
$lang->report->annualData->productFields['finished'] = "Finished {$lang->storyCommon}";

$lang->report->annualData->objectTypeList['product']     = $lang->productCommon;
$lang->report->annualData->objectTypeList['story']       = $lang->storyCommon;
$lang->report->annualData->objectTypeList['productplan'] = "Plan";
$lang->report->annualData->objectTypeList['release']     = "Release";
$lang->report->annualData->objectTypeList['project']     = $lang->projectCommon;
$lang->report->annualData->objectTypeList['task']        = 'Task';
$lang->report->annualData->objectTypeList['repo']        = 'Code';
$lang->report->annualData->objectTypeList['bug']         = 'Bug';
$lang->report->annualData->objectTypeList['build']       = 'Build';
$lang->report->annualData->objectTypeList['testtask']    = 'TestTask';
$lang->report->annualData->objectTypeList['case']        = 'Case';
$lang->report->annualData->objectTypeList['doc']         = 'Document';

$lang->report->annualData->actionList['create']    = 'Created';
$lang->report->annualData->actionList['edit']      = 'Edited';
$lang->report->annualData->actionList['close']     = 'Closed';
$lang->report->annualData->actionList['review']    = 'Reviewed';
$lang->report->annualData->actionList['gitCommit'] = 'GIT Commited';
$lang->report->annualData->actionList['svnCommit'] = 'SVN Commited';
$lang->report->annualData->actionList['start']     = 'Started';
$lang->report->annualData->actionList['finish']    = 'Finished';
$lang->report->annualData->actionList['assign']    = 'Assigned';
$lang->report->annualData->actionList['activate']  = 'Activated';
$lang->report->annualData->actionList['resolve']   = 'Resolved';
$lang->report->annualData->actionList['run']       = 'Execute';
$lang->report->annualData->actionList['change']    = 'Changed';
$lang->report->annualData->actionList['pause']     = 'Paused';
$lang->report->annualData->actionList['cancel']    = 'Canceled';
$lang->report->annualData->actionList['confirm']   = 'Confirmed';
$lang->report->annualData->actionList['createBug'] = 'Turn to bug';

$lang->report->annualData->todoStatus['all']    = 'All';
$lang->report->annualData->todoStatus['undone'] = 'Undone';
$lang->report->annualData->todoStatus['done']   = 'Done';

$lang->report->annualData->radarItems['product'] = $lang->productCommon;
$lang->report->annualData->radarItems['project'] = $lang->projectCommon;
$lang->report->annualData->radarItems['devel']   = "Development";
$lang->report->annualData->radarItems['qa']      = "QA";
$lang->report->annualData->radarItems['other']   = "Other";
