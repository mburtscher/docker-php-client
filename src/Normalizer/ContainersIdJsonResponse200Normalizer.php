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
class ContainersIdJsonResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\ContainersIdJsonResponse200') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\ContainersIdJsonResponse200) {
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
        $object = new \DockerPhpClient\Model\ContainersIdJsonResponse200();
        if (property_exists($data, 'Id')) {
            $object->setId($data->{'Id'});
        }
        if (property_exists($data, 'Created')) {
            $object->setCreated($data->{'Created'});
        }
        if (property_exists($data, 'Path')) {
            $object->setPath($data->{'Path'});
        }
        if (property_exists($data, 'Args')) {
            $values = array();
            foreach ($data->{'Args'} as $value) {
                $values[] = $value;
            }
            $object->setArgs($values);
        }
        if (property_exists($data, 'State')) {
            $object->setState($this->denormalizer->denormalize($data->{'State'}, 'DockerPhpClient\\Model\\ContainersIdJsonResponse200State', 'json', $context));
        }
        if (property_exists($data, 'Image')) {
            $object->setImage($data->{'Image'});
        }
        if (property_exists($data, 'ResolvConfPath')) {
            $object->setResolvConfPath($data->{'ResolvConfPath'});
        }
        if (property_exists($data, 'HostnamePath')) {
            $object->setHostnamePath($data->{'HostnamePath'});
        }
        if (property_exists($data, 'HostsPath')) {
            $object->setHostsPath($data->{'HostsPath'});
        }
        if (property_exists($data, 'LogPath')) {
            $object->setLogPath($data->{'LogPath'});
        }
        if (property_exists($data, 'Node')) {
            $object->setNode($data->{'Node'});
        }
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'RestartCount')) {
            $object->setRestartCount($data->{'RestartCount'});
        }
        if (property_exists($data, 'Driver')) {
            $object->setDriver($data->{'Driver'});
        }
        if (property_exists($data, 'MountLabel')) {
            $object->setMountLabel($data->{'MountLabel'});
        }
        if (property_exists($data, 'ProcessLabel')) {
            $object->setProcessLabel($data->{'ProcessLabel'});
        }
        if (property_exists($data, 'AppArmorProfile')) {
            $object->setAppArmorProfile($data->{'AppArmorProfile'});
        }
        if (property_exists($data, 'ExecIDs')) {
            $object->setExecIDs($data->{'ExecIDs'});
        }
        if (property_exists($data, 'HostConfig')) {
            $object->setHostConfig($data->{'HostConfig'});
        }
        if (property_exists($data, 'GraphDriver')) {
            $object->setGraphDriver($this->denormalizer->denormalize($data->{'GraphDriver'}, 'DockerPhpClient\\Model\\GraphDriverData', 'json', $context));
        }
        if (property_exists($data, 'SizeRw')) {
            $object->setSizeRw($data->{'SizeRw'});
        }
        if (property_exists($data, 'SizeRootFs')) {
            $object->setSizeRootFs($data->{'SizeRootFs'});
        }
        if (property_exists($data, 'Mounts')) {
            $values_1 = array();
            foreach ($data->{'Mounts'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'DockerPhpClient\\Model\\MountPoint', 'json', $context);
            }
            $object->setMounts($values_1);
        }
        if (property_exists($data, 'Config')) {
            $object->setConfig($this->denormalizer->denormalize($data->{'Config'}, 'DockerPhpClient\\Model\\ContainerConfig', 'json', $context));
        }
        if (property_exists($data, 'NetworkSettings')) {
            $object->setNetworkSettings($this->denormalizer->denormalize($data->{'NetworkSettings'}, 'DockerPhpClient\\Model\\NetworkConfig', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'Id'} = $object->getId();
        }
        if (null !== $object->getCreated()) {
            $data->{'Created'} = $object->getCreated();
        }
        if (null !== $object->getPath()) {
            $data->{'Path'} = $object->getPath();
        }
        if (null !== $object->getArgs()) {
            $values = array();
            foreach ($object->getArgs() as $value) {
                $values[] = $value;
            }
            $data->{'Args'} = $values;
        }
        if (null !== $object->getState()) {
            $data->{'State'} = $this->normalizer->normalize($object->getState(), 'json', $context);
        }
        if (null !== $object->getImage()) {
            $data->{'Image'} = $object->getImage();
        }
        if (null !== $object->getResolvConfPath()) {
            $data->{'ResolvConfPath'} = $object->getResolvConfPath();
        }
        if (null !== $object->getHostnamePath()) {
            $data->{'HostnamePath'} = $object->getHostnamePath();
        }
        if (null !== $object->getHostsPath()) {
            $data->{'HostsPath'} = $object->getHostsPath();
        }
        if (null !== $object->getLogPath()) {
            $data->{'LogPath'} = $object->getLogPath();
        }
        if (null !== $object->getNode()) {
            $data->{'Node'} = $object->getNode();
        }
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getRestartCount()) {
            $data->{'RestartCount'} = $object->getRestartCount();
        }
        if (null !== $object->getDriver()) {
            $data->{'Driver'} = $object->getDriver();
        }
        if (null !== $object->getMountLabel()) {
            $data->{'MountLabel'} = $object->getMountLabel();
        }
        if (null !== $object->getProcessLabel()) {
            $data->{'ProcessLabel'} = $object->getProcessLabel();
        }
        if (null !== $object->getAppArmorProfile()) {
            $data->{'AppArmorProfile'} = $object->getAppArmorProfile();
        }
        if (null !== $object->getExecIDs()) {
            $data->{'ExecIDs'} = $object->getExecIDs();
        }
        if (null !== $object->getHostConfig()) {
            $data->{'HostConfig'} = $object->getHostConfig();
        }
        if (null !== $object->getGraphDriver()) {
            $data->{'GraphDriver'} = $this->normalizer->normalize($object->getGraphDriver(), 'json', $context);
        }
        if (null !== $object->getSizeRw()) {
            $data->{'SizeRw'} = $object->getSizeRw();
        }
        if (null !== $object->getSizeRootFs()) {
            $data->{'SizeRootFs'} = $object->getSizeRootFs();
        }
        if (null !== $object->getMounts()) {
            $values_1 = array();
            foreach ($object->getMounts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'Mounts'} = $values_1;
        }
        if (null !== $object->getConfig()) {
            $data->{'Config'} = $this->normalizer->normalize($object->getConfig(), 'json', $context);
        }
        if (null !== $object->getNetworkSettings()) {
            $data->{'NetworkSettings'} = $this->normalizer->normalize($object->getNetworkSettings(), 'json', $context);
        }
        return $data;
    }
}