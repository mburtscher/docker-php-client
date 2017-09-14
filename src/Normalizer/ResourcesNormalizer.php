<?php

namespace DockerPhpClient\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ResourcesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\Resources') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\Resources) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \DockerPhpClient\Model\Resources();
        if (property_exists($data, 'CpuShares')) {
            $object->setCpuShares($data->{'CpuShares'});
        }
        if (property_exists($data, 'Memory')) {
            $object->setMemory($data->{'Memory'});
        }
        if (property_exists($data, 'CgroupParent')) {
            $object->setCgroupParent($data->{'CgroupParent'});
        }
        if (property_exists($data, 'BlkioWeight')) {
            $object->setBlkioWeight($data->{'BlkioWeight'});
        }
        if (property_exists($data, 'BlkioWeightDevice')) {
            $values = array();
            foreach ($data->{'BlkioWeightDevice'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'DockerPhpClient\\Model\\ResourcesBlkioWeightDeviceItem', 'json', $context);
            }
            $object->setBlkioWeightDevice($values);
        }
        if (property_exists($data, 'BlkioDeviceReadBps')) {
            $values_1 = array();
            foreach ($data->{'BlkioDeviceReadBps'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'DockerPhpClient\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceReadBps($values_1);
        }
        if (property_exists($data, 'BlkioDeviceWriteBps')) {
            $values_2 = array();
            foreach ($data->{'BlkioDeviceWriteBps'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'DockerPhpClient\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceWriteBps($values_2);
        }
        if (property_exists($data, 'BlkioDeviceReadIOps')) {
            $values_3 = array();
            foreach ($data->{'BlkioDeviceReadIOps'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'DockerPhpClient\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceReadIOps($values_3);
        }
        if (property_exists($data, 'BlkioDeviceWriteIOps')) {
            $values_4 = array();
            foreach ($data->{'BlkioDeviceWriteIOps'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'DockerPhpClient\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceWriteIOps($values_4);
        }
        if (property_exists($data, 'CpuPeriod')) {
            $object->setCpuPeriod($data->{'CpuPeriod'});
        }
        if (property_exists($data, 'CpuQuota')) {
            $object->setCpuQuota($data->{'CpuQuota'});
        }
        if (property_exists($data, 'CpuRealtimePeriod')) {
            $object->setCpuRealtimePeriod($data->{'CpuRealtimePeriod'});
        }
        if (property_exists($data, 'CpuRealtimeRuntime')) {
            $object->setCpuRealtimeRuntime($data->{'CpuRealtimeRuntime'});
        }
        if (property_exists($data, 'CpusetCpus')) {
            $object->setCpusetCpus($data->{'CpusetCpus'});
        }
        if (property_exists($data, 'CpusetMems')) {
            $object->setCpusetMems($data->{'CpusetMems'});
        }
        if (property_exists($data, 'Devices')) {
            $values_5 = array();
            foreach ($data->{'Devices'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'DockerPhpClient\\Model\\DeviceMapping', 'json', $context);
            }
            $object->setDevices($values_5);
        }
        if (property_exists($data, 'DeviceCgroupRules')) {
            $values_6 = array();
            foreach ($data->{'DeviceCgroupRules'} as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setDeviceCgroupRules($values_6);
        }
        if (property_exists($data, 'DiskQuota')) {
            $object->setDiskQuota($data->{'DiskQuota'});
        }
        if (property_exists($data, 'KernelMemory')) {
            $object->setKernelMemory($data->{'KernelMemory'});
        }
        if (property_exists($data, 'MemoryReservation')) {
            $object->setMemoryReservation($data->{'MemoryReservation'});
        }
        if (property_exists($data, 'MemorySwap')) {
            $object->setMemorySwap($data->{'MemorySwap'});
        }
        if (property_exists($data, 'MemorySwappiness')) {
            $object->setMemorySwappiness($data->{'MemorySwappiness'});
        }
        if (property_exists($data, 'NanoCPUs')) {
            $object->setNanoCPUs($data->{'NanoCPUs'});
        }
        if (property_exists($data, 'OomKillDisable')) {
            $object->setOomKillDisable($data->{'OomKillDisable'});
        }
        if (property_exists($data, 'PidsLimit')) {
            $object->setPidsLimit($data->{'PidsLimit'});
        }
        if (property_exists($data, 'Ulimits')) {
            $values_7 = array();
            foreach ($data->{'Ulimits'} as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'DockerPhpClient\\Model\\ResourcesUlimitsItem', 'json', $context);
            }
            $object->setUlimits($values_7);
        }
        if (property_exists($data, 'CpuCount')) {
            $object->setCpuCount($data->{'CpuCount'});
        }
        if (property_exists($data, 'CpuPercent')) {
            $object->setCpuPercent($data->{'CpuPercent'});
        }
        if (property_exists($data, 'IOMaximumIOps')) {
            $object->setIOMaximumIOps($data->{'IOMaximumIOps'});
        }
        if (property_exists($data, 'IOMaximumBandwidth')) {
            $object->setIOMaximumBandwidth($data->{'IOMaximumBandwidth'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCpuShares()) {
            $data->{'CpuShares'} = $object->getCpuShares();
        }
        if (null !== $object->getMemory()) {
            $data->{'Memory'} = $object->getMemory();
        }
        if (null !== $object->getCgroupParent()) {
            $data->{'CgroupParent'} = $object->getCgroupParent();
        }
        if (null !== $object->getBlkioWeight()) {
            $data->{'BlkioWeight'} = $object->getBlkioWeight();
        }
        if (null !== $object->getBlkioWeightDevice()) {
            $values = array();
            foreach ($object->getBlkioWeightDevice() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'BlkioWeightDevice'} = $values;
        }
        if (null !== $object->getBlkioDeviceReadBps()) {
            $values_1 = array();
            foreach ($object->getBlkioDeviceReadBps() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'BlkioDeviceReadBps'} = $values_1;
        }
        if (null !== $object->getBlkioDeviceWriteBps()) {
            $values_2 = array();
            foreach ($object->getBlkioDeviceWriteBps() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'BlkioDeviceWriteBps'} = $values_2;
        }
        if (null !== $object->getBlkioDeviceReadIOps()) {
            $values_3 = array();
            foreach ($object->getBlkioDeviceReadIOps() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'BlkioDeviceReadIOps'} = $values_3;
        }
        if (null !== $object->getBlkioDeviceWriteIOps()) {
            $values_4 = array();
            foreach ($object->getBlkioDeviceWriteIOps() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'BlkioDeviceWriteIOps'} = $values_4;
        }
        if (null !== $object->getCpuPeriod()) {
            $data->{'CpuPeriod'} = $object->getCpuPeriod();
        }
        if (null !== $object->getCpuQuota()) {
            $data->{'CpuQuota'} = $object->getCpuQuota();
        }
        if (null !== $object->getCpuRealtimePeriod()) {
            $data->{'CpuRealtimePeriod'} = $object->getCpuRealtimePeriod();
        }
        if (null !== $object->getCpuRealtimeRuntime()) {
            $data->{'CpuRealtimeRuntime'} = $object->getCpuRealtimeRuntime();
        }
        if (null !== $object->getCpusetCpus()) {
            $data->{'CpusetCpus'} = $object->getCpusetCpus();
        }
        if (null !== $object->getCpusetMems()) {
            $data->{'CpusetMems'} = $object->getCpusetMems();
        }
        if (null !== $object->getDevices()) {
            $values_5 = array();
            foreach ($object->getDevices() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'Devices'} = $values_5;
        }
        if (null !== $object->getDeviceCgroupRules()) {
            $values_6 = array();
            foreach ($object->getDeviceCgroupRules() as $value_6) {
                $values_6[] = $value_6;
            }
            $data->{'DeviceCgroupRules'} = $values_6;
        }
        if (null !== $object->getDiskQuota()) {
            $data->{'DiskQuota'} = $object->getDiskQuota();
        }
        if (null !== $object->getKernelMemory()) {
            $data->{'KernelMemory'} = $object->getKernelMemory();
        }
        if (null !== $object->getMemoryReservation()) {
            $data->{'MemoryReservation'} = $object->getMemoryReservation();
        }
        if (null !== $object->getMemorySwap()) {
            $data->{'MemorySwap'} = $object->getMemorySwap();
        }
        if (null !== $object->getMemorySwappiness()) {
            $data->{'MemorySwappiness'} = $object->getMemorySwappiness();
        }
        if (null !== $object->getNanoCPUs()) {
            $data->{'NanoCPUs'} = $object->getNanoCPUs();
        }
        if (null !== $object->getOomKillDisable()) {
            $data->{'OomKillDisable'} = $object->getOomKillDisable();
        }
        if (null !== $object->getPidsLimit()) {
            $data->{'PidsLimit'} = $object->getPidsLimit();
        }
        if (null !== $object->getUlimits()) {
            $values_7 = array();
            foreach ($object->getUlimits() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data->{'Ulimits'} = $values_7;
        }
        if (null !== $object->getCpuCount()) {
            $data->{'CpuCount'} = $object->getCpuCount();
        }
        if (null !== $object->getCpuPercent()) {
            $data->{'CpuPercent'} = $object->getCpuPercent();
        }
        if (null !== $object->getIOMaximumIOps()) {
            $data->{'IOMaximumIOps'} = $object->getIOMaximumIOps();
        }
        if (null !== $object->getIOMaximumBandwidth()) {
            $data->{'IOMaximumBandwidth'} = $object->getIOMaximumBandwidth();
        }
        return $data;
    }
}