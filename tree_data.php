<?php
     include_once 'db/Tags.class.php';
     $tagDAO = new Tags();

     $data = $tagDAO->getAllTags();

     

$itemsByReference = array();
// Build array of item references:
foreach($data as $key => &$item) {
$itemsByReference[$item['TagId']] = &$item;
// Children array:
$itemsByReference[$item['TagId']]['children'] = array();
// Empty data class (so that json_encode adds "data: {}" )
$itemsByReference[$item['TagId']]['data'] = new StdClass();
}
// Set items as children of the relevant parent item.
foreach($data as $key => &$item)
if($item['ParentTagId'] && isset($itemsByReference[$item['ParentTagId']]))
$itemsByReference [$item['ParentTagId']]['children'][] = &$item;
// Remove items that were added to parents elsewhere:
foreach($data as $key => &$item) {
if($item['ParentTagId'] && isset($itemsByReference[$item['ParentTagId']]))
unset($data[$key]);
}
// Encode:
echo json_encode($data);

?>