<?php

namespace QuantumCA\DNSPod\Responses;

/**
 * @property int $id
 * @property string $is_vip "yes"/"no"
 * @property string $name
 * @property string $punycode
 * @property string $grade
 * @property int $grade_level
 * @property string $grade_title
 * @property string $status "enable"/"disabled"
 * @property string $ext_status
 * @property int $records
 * @property int $group_id
 * @property string $is_mark "yes"/"no"
 * @property string $remark
 * @property int $user_id
 * @property string $created_on
 * @property string $updated_on
 * @property int $ttl
 * @property string $owner
 * @property string $cname_speedup "enable"/"disabled"
 * @property string $searchengine_push "yes"/"no"
 * @property string $is_grace_period "yes"/"no"
 * @property int $uin
 * @property string $owner_nick
 * @property string[] $dnspod_ns
 * @property string[] $now_ns
 * @property int $q_project_id
 * @property string $is_beian "yes"/"no"
 */
interface DomainObject
{
}
