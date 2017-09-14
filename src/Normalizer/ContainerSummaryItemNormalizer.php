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
class ContainerSummaryItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\ContainerSummaryItem') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\ContainerSummaryItem) {
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
        $object = new \DockerPhpClient\Model\ContainerSummaryItem();
        if (property_exists($data, 'Id')) {
            $object->setId($data->{'Id'});
        }
        if (property_exists($data, 'Names')) {
            $values = array();
            foreach ($data->{'Names'} as $value) {
                $values[] = $value;
            }
            $object->setNames($values);
        }
        if (property_exists($data, 'Image')) {
            $object->setImage($data->{'Image'});
        }
        if (property_exists($data, 'ImageID')) {
            $object->setImageID($data->{'ImageID'});
        }
        if (property_exists($data, 'Command')) {
            $object->setCommand($data->{'Command'});
        }
        if (property_exists($data, 'Created')) {
            $object->setCreated($data->{'Created'});
        }
        if (property_exists($data, 'Ports')) {
            $values_1 = array();
            foreach ($data->{'Ports'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'DockerPhpClient\\Model\\Port', 'json', $context);
            }
            $object->setPorts($values_1);
        }
        if (property_exists($data, 'SizeRw')) {
            $object->setSizeRw($data->{'SizeRw'});
        }
        if (property_exists($data, 'SizeRootFs')) {
            $object->setSizeRootFs($data->{'SizeRootFs'});
        }
        if (property_exists($data, 'Labels')) {
            $values_2 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Labels'} as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setLabels($values_2);
        }
        if (property_exists($data, 'State')) {
            $object->setState($data->{'State'});
        }
        if (property_exists($data, 'Status')) {
            $object->setStatus($data->{'Status'});
        }
        if (property_exists($data, 'HostConfig')) {
            $object->setHostConfig($this->denormalizer->denormalize($data->{'HostConfig'}, 'DockerPhpClient\\Model\\ContainerSummaryItemHostConfig', 'json', $context));
        }
        if (property_exists($data, 'NetworkSettings')) {
            $object->setNetworkSettings($this->denormalizer->denormalize($data->{'NetworkSettings'}, 'DockerPhpClient\\Model\\ContainerSummaryItemNetworkSettings', 'json', $context));
        }
        if (property_exists($data, 'Mounts')) {
            $values_3 = array();
            foreach ($data->{'Mounts'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'DockerPhpClient\\Model\\Mount', 'json', $context);
            }
            $object->setMounts($values_3);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'Id'} = $object->getId();
        }
        if (null !== $object->getNames()) {
            $values = array();
            foreach ($object->getNames() as $value) {
                $values[] = $value;
            }
            $data->{'Names'} = $values;
        }
        if (null !== $object->getImage()) {
            $data->{'Image'} = $object->getImage();
        }
        if (null !== $object->getImageID()) {
            $data->{'ImageID'} = $object->getImageID();
        }
        if (null !== $object->getCommand()) {
            $data->{'Command'} = $object->getCommand();
        }
        if (null !== $object->getCreated()) {
            $data->{'Created'} = $object->getCreated();
        }
        if (null !== $object->getPorts()) {
            $values_1 = array();
            foreach ($object->getPorts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'Ports'} = $values_1;
        }
        if (null !== $object->getSizeRw()) {
            $data->{'SizeRw'} = $object->getSizeRw();
        }
        if (null !== $object->getSizeRootFs()) {
            $data->{'SizeRootFs'} = $object->getSizeRootFs();
        }
        if (null !== $object->getLabels()) {
            $values_2 = new \stdClass();
            foreach ($object->getLabels() as $key => $value_2) {
                $values_2->{$key} = $value_2;
            }
            $data->{'Labels'} = $values_2;
        }
        if (null !== $object->getState()) {
            $data->{'State'} = $object->getState();
        }
        if (null !== $object->getStatus()) {
            $data->{'Status'} = $object->getStatus();
        }
        if (null !== $object->getHostConfig()) {
            $data->{'HostConfig'} = $this->normalizer->normalize($object->getHostConfig(), 'json', $context);
        }
        if (null !== $object->getNetworkSettings()) {
            $data->{'NetworkSettings'} = $this->normalizer->normalize($object->getNetworkSettings(), 'json', $context);
        }
        if (null !== $object->getMounts()) {
            $values_3 = array();
            foreach ($object->getMounts() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'Mounts'} = $values_3;
        }
        return $data;
    }
}