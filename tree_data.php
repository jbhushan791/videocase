<?php
     include_once 'db/TagDao.class.php';
     $tagDAO = new TagDao();

     $data = $tagDAO->getAllTags();

     

$itemsByReference = array();
// Build array of item references:
foreach($data as $key => &$item) {
$itemsByReference[$item['Tag_Id']] = &$item;
// Children array:
$itemsByReference[$item['Tag_Id']]['children'] = array();
// Empty data class (so that json_encode adds "data: {}" )
$itemsByReference[$item['Tag_Id']]['data'] = new StdClass();
}
// Set items as children of the relevant parent item.
foreach($data as $key => &$item)
if($item['Parent_Tag_Id'] && isset($itemsByReference[$item['Parent_Tag_Id']]))
$itemsByReference [$item['Parent_Tag_Id']]['children'][] = &$item;
// Remove items that were added to parents elsewhere:
foreach($data as $key => &$item) {
if($item['Parent_Tag_Id'] && isset($itemsByReference[$item['Parent_Tag_Id']]))
unset($data[$key]);
}
// Encode:
echo json_encode($data);

?>